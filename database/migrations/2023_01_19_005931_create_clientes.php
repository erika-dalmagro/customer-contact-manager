<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{

    public function up()
    {
        Schema::dropIfExists('clientes');
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('tipo_pessoa');
            $table->string('documento')->unique();
            $table->string('estado');
            $table->string('cidade');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('status');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};