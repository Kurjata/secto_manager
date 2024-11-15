<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use HasFactory;

    protected $fillable = ['caminho_arquivo', 'nome_original', 'chamado_id'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class);
    }
}
