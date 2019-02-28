<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ticketVal extends FormRequest
{
    public function authorize(){

        return true;
    }

    public function rules(){

        $datos = $this->validationData();
        
        return [
            "titulo" => ["required"],
            "prioridad" => ["required"],
            "categoria" => ["required"],
            "mensaje" => ["required"]
        ];
    }
}
