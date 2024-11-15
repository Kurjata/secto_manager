<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'status', 'usuario_id', 'cadastro_fiscal_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function cadastroFiscal()
    {
        return $this->belongsTo(CadastroFiscal::class);
    }

    public function arquivos()
    {
        return $this->hasMany(Arquivo::class);
    }
}
