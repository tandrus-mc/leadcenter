<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'list_model_id',
        'title',
        'first_name',
        'last_name',
        'suffix',
        'email',
        'home_phone',
        'mobile_phone',
        'birth_date',
        'gender',
        'maritalStatus',
        'education',
        'occupation',
        'profession',
        'income',
        'address1',
        'address2',
        'address3',
        'city',
        'state',
        'zip',
        'country',
        'capture_date',
        'ip',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ ];

    /**
     * The attributes that should be mutated to dates. (SoftDeletes)
     *
     * @var array
     */
    protected $dates = [ 'deleted_at', 'capture_date', 'birth_date', 'created_at', 'updated_at' ];

    public function lead_list()
    {
        return $this->belongsTo( 'App\LeadList' );
    }
}
