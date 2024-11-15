<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroFiscal extends Model
{
    use HasFactory;

    protected $fillable = ['cnpj', 'razao_social'];

    public function chamados()
    {
        return $this->hasMany(Chamado::class);
    }
}
