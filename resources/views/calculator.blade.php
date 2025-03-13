<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Laravel</title>
</head>
<body>
    <h2>Calculatrice</h2>
    <form method="POST" action="{{ url('/calculator/calculate') }}">
        @csrf
        <input type="number" name="number1" placeholder="Nombre 1" required step="any" value="{{ old('number1') }}">
        <input type="number" name="number2" placeholder="Nombre 2" required step="any" value="{{ old('number2') }}">
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Soustraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (/)</option>
        </select>
        <button type="submit">Calculer</button>
    </form>

    @if(isset($result) && isset($operationSymbol))
        <h3>Résultat : {{ $number1 }} {{ $operationSymbol }} {{ $number2 }} = {{ $result }}</h3>
    @endif
</body>
</html>
