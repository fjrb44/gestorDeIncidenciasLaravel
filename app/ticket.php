<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function priority() {
        return $this->belongsTo('App\Priority');
    }

    public function usuario() {
        return $this->belongsTo('App\User');
    }
}
