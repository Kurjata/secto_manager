<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'nome' => 'Usuário Teste',  // Atualizado para 'nome'
            'email' => 'teste@teste.com.br',
            'senha' => bcrypt('teste'), // Atualizado para 'senha'
        ]);
    }
}