<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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

    public function __construct(){
        $this->server      = 'clientftp.xverify.com';
        $this->username    = 'ClickPromise';
        $this->password    =  '5KHouwrU66F4';
        $this->mode        =  FTP_ASCII;

        $this->source_path = storage_path('app/csv/');
        $this->dest_path   = '/incoming/email/';
    }

    public function transferToXverify(){
        $file = 'test.csv';
        $connection = ftp_connect($this->server);

        $login = ftp_login($connection, $this->username, $this->password);
        ftp_pasv($connection, $login);
        if(!$connection || !$login){
            die('Connection attempt failed.');
        }
        if(ftp_put($connection, $this->dest_path.$file, $this->source_path.$file, $this->mode)){
            echo "successfully uploaded $file\n";
        } else {
            echo "there was a problem uploading $file\n";
        }

        ftp_close($connection);
    }

    protected function prepCsvForTransfer(){
        $reader = Reader::createFromPath(storage_path('app/uploads/1461187083_Test_List.csv'));
        $csv    = Writer::createFromFileObject(new \SplFileObject(storage_path('app/csv/test.csv'), 'w+'));
        $csv->setNewline("\r\n");
        foreach($reader as $row){
            $csv->insertOne($row);
        }
    }
}
