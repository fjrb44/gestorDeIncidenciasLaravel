<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public function ticket(){
        return $this->hasMany("App\Ticket");
    }
}
