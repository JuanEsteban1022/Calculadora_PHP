<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="POST" action="resultado.php">
        Numero 1<br>
        <input type="number" name="Numero1" required=""><br><br>
        Operador<br>
        <select name="Operador" required="">
            <option disabled="Seleccione">Seleccione</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        Numero 2<br>
        <input type="number" name="Numero2" required=""><br><br>
        <input type="submit" name="Calcular">
    </form>
</body>

</html>