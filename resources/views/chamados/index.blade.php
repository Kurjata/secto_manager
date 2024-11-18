<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Chamados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Chamados</h1>
        <a href="{{ route('chamados.create') }}" class="btn btn-primary mb-3">Criar Novo Chamado</a>
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
                @foreach ($chamados as $chamado)
                    <tr>
                        <td>{{ $chamado->id }}</td>
                        <td>{{ $chamado->titulo }}</td>
                        <td>{{ $chamado->status }}</td>
                        <td>
                            <a href="{{ route('chamados.edit', $chamado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('chamados.destroy', $chamado->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
