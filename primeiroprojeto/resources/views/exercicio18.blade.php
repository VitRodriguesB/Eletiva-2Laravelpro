<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18: Juros Compostos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 18: Juros Compostos</h1>
        <p>Crie um formulário que permita ao usuário inserir um capital, uma taxa de juros e um período. O script PHP deve calcular o montante com juros compostos (capital * (1 + taxa)^ período) e exibir o resultado.</p>

        <form action="{{ route('exercicio18.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="capital" class="form-label">Capital (R$):</label>
                <input type="number" step="0.01" class="form-control" id="capital" name="capital" required>
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Taxa de Juros (% a.m.):</label>
                <input type="number" step="any" class="form-control" id="taxa" name="taxa" required>
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Período (meses):</label>
                <input type="number" step="1" class="form-control" id="periodo" name="periodo" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Montante</button>
        </form>

        @if(isset($montante))
            <div class="alert alert-success mt-4">
                O montante final com juros compostos é: <strong>R$ {{ number_format($montante, 2, ',', '.') }}</strong>
            </div>
        @endif
    </div>
</body>
</html>