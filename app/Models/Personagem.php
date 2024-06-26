<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    use HasFactory;

    protected $table = 'personagens'; // Nome correto da tabela
    protected $fillable = ['nome', 'descricao', 'imagem']; // Campos preenchíveis
}
