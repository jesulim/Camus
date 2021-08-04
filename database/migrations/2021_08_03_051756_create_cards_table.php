<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name_museo');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('direccion');
            $table->string('ubicacion');
            $table->string('name');
            $table->enum('status',[1,2])->default(1);
            $table->string('epoca');
            $table->string('autor');
            $table->string('atribucion');
            $table->string('tecnica');
            $table->string('n_inventario');
            $table->enum('procedencia', ['DONACION', 'COMPRA', 'CEDIDA', 'DONACION_TESTAMENTARIA', 'OTROS']);
            $table->enum('estado', ['EXCELENTE', 'BUENO', 'REGULAR', 'MALO', 'PESIMO', 'FRAGMENTO']);
            $table->text('marcas');
            $table->float('alto',6,2);
            $table->float('largo',6,2);
            $table->float('ancho',6,2);
            $table->longText('descripcion');
            $table->string('image');

            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
