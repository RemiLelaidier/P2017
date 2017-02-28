<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubTheme extends Model
{
    protected $table = 'subthemes';

    public function theme(){
        $this->hasOne('App\Model\Theme');
    }
}