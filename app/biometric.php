<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biometric extends Model
{
    protected $fillable = [
        'biometric_text',
        'biometric_image',
    ];

    public function report(){
 
        return $this->belongsTo('App\report', 'id');
    }

    public function user_biometric()
    {
        return $this->belongsToMany('App\User' , 'biometric_user')->withTimestamps();
        // belongsToMany
        // 'App\user' , 'id'
        // 'App\User' ,'authentication_user'
    }

}
