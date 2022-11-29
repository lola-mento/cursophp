<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->date('fnac');
            $table->decimal('cupo',20,1);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
