<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointOfSale extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pos_id', 'number', 'password','serial_number','sim_number'
    ];

    protected $table = 'point_of_sale';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
