<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nome');
            $table->string('ra');
            $table->date('data_nasc');
            $table->string('celular');
            $table->string('email');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
}
