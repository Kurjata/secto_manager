<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Chamado</h1>
        <form action="{{ route('chamados.update', $chamado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $chamado->titulo }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" required>{{ $chamado->descricao }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="aberto" {{ $chamado->status == 'aberto' ? 'selected' : '' }}>Aberto</option>
                    <option value="em progresso" {{ $chamado->status == 'em progresso' ? 'selected' : '' }}>Em Progresso</option>
                    <option value="concluido" {{ $chamado->status == 'concluido' ? 'selected' : '' }}>Concluído</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('chamados.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
