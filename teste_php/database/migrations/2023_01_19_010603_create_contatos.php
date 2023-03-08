<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{

    public function up()
    {
        Schema::dropIfExists('contatos');
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id') -> nullable() ;
            $table->foreign('cliente_id') -> references('id') -> on('clientes') -> onDelete("cascade");

            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('funcao');
            $table->timestamps();
            

        });
    }

    public function down()
    {
        Schema::dropIfExists('contatos');
    }
};