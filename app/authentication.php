<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class authentication extends Model
{
    // $fillable -> "يستقبل المحدد في المصفوفة فقط"
    protected $fillable = [
        'authentication_text',
        'authentication_id',
        'authentication_image'
    ];
    
    public function report(){
 
        return $this->belongsTo('App\report', 'id');
    }

    public function user_authentication()
    {
        return $this->belongsToMany('App\User' , 'authentication_user')->withTimestamps();
        // belongsToMany
        // 'App\user' , 'id'
        // 'App\User' ,'authentication_user'
    }
}
