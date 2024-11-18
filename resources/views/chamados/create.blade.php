<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Chamado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Criar Novo Chamado</h1>
        <form action="{{ route('chamados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="aberto">Aberto</option>
                    <option value="em progresso">Em Progresso</option>
                    <option value="concluido">Concluído</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('chamados.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
