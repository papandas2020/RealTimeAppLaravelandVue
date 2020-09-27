<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded =[];
    public function question(){

        return $this->belongsTo(Question::class);
    }
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function like(){

        return $this->hasMany(Like::class);
    }
}
