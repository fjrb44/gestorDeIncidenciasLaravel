<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    public function ticket(){
        return $this->hasMany("App\ticket");
    }
}
