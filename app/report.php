<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{

    //$guarded -> "يستقبل كل شي باستثناء المحدد في المصفوفة"
    protected $guarded = [
        // guarded attributes authentication model 
            'authentication_text',
            'authentication_user', //relation
            'authentication_image',
        // guarded attributes biometric model
            'biometric_text',
            'biometric_user', //relation
            'biometric_image',
        // guarded attributes descriptive model
            'descriptive_text',
            'descriptive_user', //relation
            'descriptive_image',
        // guarded attributes devaloper model
            'devalopers_text',
            'devaloper_user', //relation
            'devaloper_image',
    ];

    //Units relations ..

    public function authentication()
    { 
        return $this->hasOne('App\authentication', 'report_id');
    }

    public function biometric()
    {
        return $this->hasOne('App\biometric', 'report_id');
    }

    public function descriptive()
    {
        return $this->hasOne('App\descriptive', 'report_id');
    }

    public function devaloper()
    {
    return $this->hasOne('App\devaloper', 'report_id');
    }


    //////// relation with user .. 

    public function user()
    {
        return $this->belongsTo('App\user' , 'user_id');
    }
}
