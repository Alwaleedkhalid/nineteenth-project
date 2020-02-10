<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AuthenticationUser extends Pivot
{
    protected $table='authentication_user';
    protected $fillable = [
        'user_id',
        'authentication_id'
    ];


    public function user_auth(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function authentication_user(){
        return $this->hasOne('App\authentication', 'id', 'user_id');
    }


}
