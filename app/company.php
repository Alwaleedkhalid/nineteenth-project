<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'company_name',
        'since',
        'number_of_employee',
    ];

}
