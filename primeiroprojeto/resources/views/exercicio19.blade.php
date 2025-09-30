<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19: Conversão de Dias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Exercício 19: Conversão de Dias</h1>
        <p>Crie um formulário que permita ao usuário inserir um valor em dias. O script PHP deve converter esse valor para horas, minutos e segundos e exibir o resultado.</p>

        <form action="{{ route('exercicio19.handle') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="dias" class="form-label">Quantidade de Dias:</label>
                <input type="number" step="1" min="0" class="form-control" id="dias" name="dias" required>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>

        @if(isset($horas))
            <div class="alert alert-success mt-4">
                <h4>Resultados para {{ $dias }} dia(s):</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>Horas:</strong> {{ number_format($horas, 0, ',', '.') }}</li>
                    <li><strong>Minutos:</strong> {{ number_format($minutos, 0, ',', '.') }}</li>
                    <li><strong>Segundos:</strong> {{ number_format($segundos, 0, ',', '.') }}</li>
                </ul>
            </div>
        @endif
    </div>
</body>
</html>