<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['id', 'razao_social','nome_fantasia', 'tipo_pessoa', 'documento', 'estado', 'cidade', 'email', 'telefone', 'endereco', 'status'];
}