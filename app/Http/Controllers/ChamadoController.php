<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function index()
    {
        $chamados = Chamado::all();
        return view('chamados.index', compact('chamados'));
    }

    public function create()
    {
        return view('chamados.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'status' => 'required|string|max:50',
            'usuario_id' => 'required|integer|exists:usuarios,id',
            'cadastro_fiscal_id' => 'required|integer|exists:cadastros_fiscais,id',
        ]);

        // Criação do chamado
        Chamado::create($request->only(['titulo', 'descricao', 'status', 'usuario_id', 'cadastro_fiscal_id']));
        return redirect()->route('chamados.index');
    }

    public function edit(Chamado $chamado)
    {
        return view('chamados.edit', compact('chamado'));
    }

    public function update(Request $request, Chamado $chamado)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'status' => 'required|string|max:50',
        ]);

        // Atualização do chamado
        $chamado->update($request->only(['titulo', 'descricao', 'status']));
        return redirect()->route('chamados.index');
    }

    public function destroy(Chamado $chamado)
    {
        $chamado->delete();
        return redirect()->route('chamados.index');
    }
}
