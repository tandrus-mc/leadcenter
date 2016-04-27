<?php

namespace App\Http\Controllers;

use App\LeadList;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
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

    public $csvWriter;
    public $csvReader;

    protected $leadList;

    protected $rowLimit;

    protected $errors;

    protected $currentRow;

    protected $validHeader;

    public function __construct(){
        $this->server      = 'clientftp.xverify.com';
        $this->username    = 'ClickPromise';
        $this->password    = '5KHouwrU66F4';
        $this->mode        =  FTP_ASCII;

        $this->source_path = storage_path('app/csv/');
        $this->dest_path   = '/incoming/email/';

        $this->currentRow  = 1;

    }

    public function transferToXverify($id){
        $this->leadList    = LeadList::findOrFail($id);

        $this->csvWriter   = csvWriter($this->leadList->csvPath().$this->leadList->file_name);
        $this->csvReader   = readerFromPath($this->leadList->path);



        $this->prepCsvForTransfer();

        dd($this->errors);

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

    public function prepCsvForTransfer(){

            //add csvValidators

            //header validation
            /*$this->csvWriter->addValidator(function (array $header) {
                $headerValidator = Validator::make($header, [
                    //pass header validation rules
                ]);
                if($headerValidator->fails()){
                    $this->errors['incorrect_format_header'] = $headerValidator;
                    $pass = false;
                } else{
                    $pass = true;
                }
                return $pass;
            }, 'incorrect_format_header');

            $this->csvWriter->insertOne($this->csvReader->fetchOne(0));

            $this->csvWriter->removeValidator('incorrect_format_header');*/

            //row validation
            $this->csvWriter->addValidator(function (array $row) {
                $rowValidator = Validator::make($row, [
                    'email'         => 'required|email|min:6',
                    'country'       => 'required',
                    'capture_date'  => 'required',
                    'ip'            => 'required'
                ]);
                if($rowValidator->fails()){
                    $this->errors['incorrect_format_row_'.$this->currentRow++] = $rowValidator;
                    $pass = false;
                } else {
                    $pass = true;
                }
                return $pass;
            }, 'incorrect_format_row');

            foreach($this->csvReader->fetchAll() as $row){
                try{
                    $this->csvWriter->insertOne($row);
                } catch(\Exception $e){
                    continue;
                }
            }
    }
}
