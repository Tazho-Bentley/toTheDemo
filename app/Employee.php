<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Zizaco\Entrust\Traits\EntrustUserTrait;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address','phone','sex', 'nrc', 'salary_scale','max_advance', 'pay_day', 'employee_number','contract_type'
    ];

    protected $table = 'employees';
}
