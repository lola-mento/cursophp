<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('edad',30);
            $table->string('pais',40);
            $table->date('fnac');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('autors');
    }
};
