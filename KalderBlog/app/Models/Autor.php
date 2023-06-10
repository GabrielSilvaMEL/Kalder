<?php

// Referências/Dependências
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    // Correção de Tradução da Tabela "Autor"
    protected $table = "autores";
    
    protected $fillable = [
        'nome', // nome de exibição do autor
        'biografia', // biografia breve
        'descabreviada', // profissão/ocupação
        'imagem', // imagem de exibição
        'email', // email para contato
    ];
}