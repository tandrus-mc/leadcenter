<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LeadList extends Model
{
    use SoftDeletes;

    protected $table = 'lead_lists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_name',
        'list_name',
        'list_notes',
        'validation',
        'path',
        'users_id',
        'provider_name',
        'good_tags',
        'bad_tags'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [ 'deleted_at' ];

    protected $file = null;

    protected $DR = DIRECTORY_SEPARATOR;

    protected function setFileName(){
        return time().'_'.$this->list_name.'.csv';
    }

    protected function uploadPath(){
        return storage_path('app'.$this->DR.'uploads'.$this->DR);
    }

    public function csvPath(){
        return storage_path('app'.$this->DR.'csv'.$this->DR);
    }

    public function previewTable(){
        $list     = readerFromPath($this->path);

        return array(
            'header'  => csvHeader($list),
            'results' => oneHundred($list)
        );
    }

    protected function move(){
        $this->file->move($this->uploadPath(), $this->file_name);
    }

    public function download(){
        readerFromPath($this->path)->output($this->list_name.'.csv');
    }

    public function addFile(UploadedFile $file){
        $this->file = $file;
        $fileName   = $this->setFileName();
        $this->fill([
            'file_name'  => $fileName,
            'path'       => $this->uploadPath().$fileName,
            'validation' => 'working'
        ])->save();

        $this->move();

    }

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function leads()
    {
        return $this->hasMany( 'App\Lead' );
    }
}
