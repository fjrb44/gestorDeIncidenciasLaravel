<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    public function ticket(){
        return $this->hasMany("App\ticket");
    }
}
