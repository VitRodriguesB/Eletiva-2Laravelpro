<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20: Velocidade Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 20: Velocidade Média</h1>
        <p>Crie um formulário que permita ao usuário inserir uma distância e um tempo. O script PHP deve calcular a velocidade média (distância / tempo) e exibir o resultado.</p>

        <form action="{{ route('exercicio20.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="distancia" class="form-label">Distância (em km):</label>
                <input type="number" step="any" class="form-control" id="distancia" name="distancia" required>
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Tempo (em horas):</label>
                <input type="number" step="any" class="form-control" id="tempo" name="tempo" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Velocidade</button>
        </form>

        @if(isset($velocidade))
            <div class="alert alert-success mt-4">
                A velocidade média é: <strong>{{ number_format($velocidade, 2, ',', '.') }} km/h</strong>
            </div>
        @endif

        @if(isset($erro))
            <div class="alert alert-danger mt-4">
                <strong>{{ $erro }}</strong>
            </div>
        @endif
    </div>
</body>
</html>