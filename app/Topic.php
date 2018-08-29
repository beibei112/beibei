<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['user_id','name','desc','questions_count'];

    public function questions(){
    	return $this->belongsToMany('App\Question');
    }

    public function ownss($topic){
        return $this->id == $topic->user_id;
    }
}
