<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'themes';

    public function article(){
        return $this->hasMany('App/Model/Article');
    }
}