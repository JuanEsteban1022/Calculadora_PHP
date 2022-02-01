<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
</head>

<body>
    <?php
    $Numero1 = $_POST['Numero1'];
    $Numero2 = $_POST['Numero2'];
    $Operador = $_POST['Operador'];

    switch ($Operador) {
        case '+':
            $Resultado = $Numero1 + $Numero2;
            break;
        case '-':
            $Resultado = $Numero1 - $Numero2;
            break;
        case '*':
            $Resultado = $Numero1 * $Numero2;
            break;
        case '/':
            $Resultado = $Numero1 / $Numero2;
            break;
        default:
            $Resultado = "Error";
            break;
    }
    ?>
    <h1>El resultado es: <?php echo $Resultado; ?></h1>
    <a href="calculadora.php">Regresar a la calculadora</a>
</body>

</html>