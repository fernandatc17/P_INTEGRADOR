<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto_movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->unsigned();
            $table->string('tipo');
            $table->integer('cantidad');
            $table->timestamps();
            //CREAMOS LLAVE FORANEA
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_movimientos');
    }
};
