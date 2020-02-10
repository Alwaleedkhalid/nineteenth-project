<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devaloper extends Model
{
    protected $fillable = [
        'devalopers_text',
        'devaloper_image',
    ];

    public function report(){
 
        return $this->belongsTo('App\report', 'id');
    }

    public function user_devaloper()
    {
        return $this->belongsToMany('App\User' , 'devaloper_user')->withTimestamps();
        // belongsToMany
        // 'App\user' , 'id'
        // 'App\User' ,'devaloper_user'
    }

}
