<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['id', 'nome','email', 'telefone', 'funcao', 'cliente_id'];
}