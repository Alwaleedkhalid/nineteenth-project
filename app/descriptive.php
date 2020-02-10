<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descriptive extends Model
{
    protected $fillable = [
        'descriptive_text',
        'descriptive_image',
    ];
    
    public function report(){
 
        return $this->belongsTo('App\report', 'id');
    }

    public function user_descriptive()
    {
        return $this->belongsToMany('App\User' , 'descriptive_user')->withTimestamps();
        // belongsToMany
        // 'App\user' , 'id'
        // 'App\User' ,'descriptive_user'
    }
}
