<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveys extends Model
{

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'users';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'email', 
         'jumlah_ya',
         'jumlah_tidak',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
