<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'email', 'password','user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // {{Relations}} \\
    //**
        // one to many / ->hasMany
        // many to one / ->belongsto 
        // many to many / ->belongstoMany
        // one to one / ->hasOne(table with no forign key) .. ->belongsTo(table with forign key)
    //
    public function report(){
 
        return $this->hasMany('App\report' ,'user_id');
    }

    // {{ relations with units }}
    public function user_report_for_authentication_unit(){
 
        return $this->belongsToMany('App\authentication' ,'authentication_user')->withPivot('authentication_id');        
        // hasMany
        // 'App\authentication' ,'authentication_id'
        // 'App\authentication' ,'authentication_user'
    }
    
    public function user_report_for_biometric_unit(){
 
        return $this->belongsToMany('App\biometric' ,'biometric_user')->withPivot('biometric_id');        
        // hasMany
        // 'App\biometric' ,'biometric_id'
        // 'App\biometric' ,'biometric_user'
    }
    
    public function user_report_for_devaloper_unit(){
 
        return $this->belongsToMany('App\devaloper' ,'devaloper_user')->withPivot('devaloper_id');        
        // hasMany
        // 'App\devaloper' ,'devaloper_id'
        // 'App\devaloper' ,'devaloper_user'
    }
    
    public function user_report_for_descriptive_unit(){
 
        return $this->belongsToMany('App\descriptive' ,'descriptive_user')->withPivot('descriptive_id');        
        // hasMany
        // 'App\descriptive' ,'descriptive_id'
        // 'App\descriptive' ,'descriptive_user'
    }
    

}
