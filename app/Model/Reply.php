<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question(){

        return $this->belongsTo('Question');
    }
    public function user(){

        return $this->belongsTo('User');
    }

    public function like(){

        return $this->hasMany('Like');
    }
}
