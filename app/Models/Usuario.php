<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    // Campos que podem ser atribuídos em massa
    protected $fillable = ['nome', 'email', 'senha']; // Altere 'password' para 'senha'

    // Campos ocultos para serialização
    protected $hidden = ['senha', 'remember_token']; // Altere 'password' para 'senha'

    // Relacionamento com a tabela Chamados
    public function chamados()
    {
        return $this->hasMany(Chamado::class);
    }

    // Informar ao Laravel que o campo de senha é 'senha'
    public function getAuthPassword()
    {
        return $this->senha; // Laravel usará a coluna 'senha' para autenticação
    }
}

