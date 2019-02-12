<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function ticket(){
        return $this->hasMany("App\Ticket");
    }
}
