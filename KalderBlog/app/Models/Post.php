<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'tituloresumido',
        'corpo',
        'datapub',
        'foto',
        'autor',
    ];
    public function autor(){
        return $this->belongsTo(Autor::class);
    } //afim de teste pode ser apagado
}
