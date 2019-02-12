<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //
    public function categoria() {
        return $this->belongsTo('App\categoria');
    }
    public function priority() {
        return $this->belongsTo('App\priority');
    }
    public function usuario() {
        return $this->belongsTo('App\usuario');
    }
}
