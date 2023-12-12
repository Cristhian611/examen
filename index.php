<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        cadena 1 : <input type="text" name="cadena1"> <br>
        valor cadena 1 : <input type="number" name="valorCadena1"><br><br>

        cadena 2 : <input type="text" name="cadena2"><br>
        valor cadena 2 : <input type="number" name="valorCadena2"><br><br>

        <input type="submit" value="enviar"><br><br>
    </form>

    <?php
    $cadena1 = $_POST['cadena1'] ?? "";
    $valor1 = (int) $_POST['valorCadena1'] ?? 0;

    $cadena2 = $_POST['cadena2'] ?? "";
    $valor2 = (int) $_POST['valorCadena2'] ?? 0;

    if ($_POST) {
        $arrai = [
            $cadena1 => $valor1,
            $cadena2 => $valor2,
        ];

        echo var_dump($arrai);
    }


    ?>
</body>

</html>