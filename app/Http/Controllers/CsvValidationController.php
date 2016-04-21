<?php

namespace App\Http\Controllers;

use App\LeadList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use League\Csv\Reader;
use League\Csv\Writer;

class CsvValidationController extends Controller
{
    protected $server;
    protected $username;
    protected $password;

    protected $mode;
    protected $dest_path;
    protected $source_path;

    protected $csvWriter;
    protected $csvReader;

    protected $leadList;

    public function __construct(){
        $this->server      = 'clientftp.xverify.com';
        $this->username    = 'ClickPromise';
        $this->password    = '5KHouwrU66F4';
        $this->mode        =  FTP_ASCII;

        $this->source_path = storage_path('app/csv/');
        $this->dest_path   = '/incoming/email/';


    }

    public function transferToXverify($id){
        $this->leadList    = LeadList::findOrFail($id);

        $this->csvWriter   = csvWriter($this->leadList->csvPath().$this->leadList->file_name);
        $this->csvReader   = readerFromPath($this->leadList->path);

        $this->prepCsvForTransfer();

        $connection = ftp_connect($this->server);

        $login = ftp_login($connection, $this->username, $this->password);
        ftp_pasv($connection, $login);
        if(!$connection || !$login){
            die('Connection attempt failed.');
        }
        if(ftp_put($connection, $this->dest_path.$this->leadList->file_name, $this->source_path.$this->leadList->file_name, $this->mode)){
            echo "successfully uploaded".$this->leadList->file_name."\n";
        } else {
            echo "there was a problem uploading ".$this->leadList->file_name."\n";
        }

        ftp_close($connection);
    }

    protected function prepCsvForTransfer(){
       $this->csvWriter->insertAll($this->csvReader);
    }
}
