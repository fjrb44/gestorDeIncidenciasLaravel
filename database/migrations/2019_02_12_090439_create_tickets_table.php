<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{

    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("mensaje");
            $table->boolean("status")->default(false);
            $table->timestamps();

            //Relaciones
            $table->integer("priority_id");
            $table->foreign('priority_id')->references('id')->on('priority')
                ->onUpdate("cascade")->onDelete("cascade");

            $table->integer("categoria_id");
            $table->foreign('categoria_id')->references('id')->on('categoria')
                ->onUpdate("cascade")->onDelete("cascade");

            $table->integer("usuario_id");
            $table->foreign('usuario_id')->references('id')->on('usuario')
                ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
