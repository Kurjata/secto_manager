<!-- resources/views/chamados/index.blade.php -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container mt-5">
    <h1>Lista de Chamados</h1>
    <a href="{{ route('chamados.create') }}" class="btn btn-primary mb-3">Criar Chamado</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chamados as $chamado)
                <tr>
                    <td>{{ $chamado->id }}</td>
                    <td>{{ $chamado->titulo }}</td>
                    <td>{{ $chamado->status }}</td>
                    <td>
                        <a href="{{ route('chamados.edit', $chamado) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('chamados.destroy', $chamado) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
