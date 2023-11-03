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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('clave');
            $table->string('habilitado');
            $table->date('fecha');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_persona')->references('id')->on('personas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_rol')->references('id')->on('rolls')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('usuario_creacion');
            $table->integer('usuario_modificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
