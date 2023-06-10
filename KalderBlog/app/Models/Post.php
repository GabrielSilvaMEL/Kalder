<?php

// Referências/Dependências
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', // título completo da postagem
        'tituloresumido', // título resumido para se adequar à página inicial
        'corpo', // texto completo do post
        'datapub', // data de publicação gerada automaticamente
        'imagem', // imagem ilustrativa relacionada ao tema da postagem
        'autor_id', // chave estrangeira do autor responsável pelo post
    ];

    // Referência para Tabela Estrangeira
    public function autor(){
        return $this->belongsTo(Autor::class);
    }
}
