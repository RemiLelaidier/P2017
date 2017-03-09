<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function auteur(){
        return $this->hasOne('App/Model/User');
    }

    public function themes(){
        return $this->hasMany('App/Model/Theme');
    }
}