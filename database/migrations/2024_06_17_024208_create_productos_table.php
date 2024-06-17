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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventario_id')->unsigned();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->integer('stock');
            $table->string('marca');
            $table->unsignedBigInteger('categoria_id')->unsigned();
            $table->string('imagen_url')->nullable();
            $table->string('especificacion');
            $table->boolean('estado')->default(true);
            $table->timestamps();
            //CREAMOS LA LLAVE FORANEA
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('inventario_id')->references('id')->on('inventarios');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
