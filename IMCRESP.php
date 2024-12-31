<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $estatura = $_POST['estatura'];

        if ($estatura > 0) {
            $imc = $peso / ($estatura * $estatura);
            $imc = round($imc, 2);

            echo "<div class='result'>Tu IMC es: $imc</div>";

            if ($imc < 18.5) {
                echo "<div class='result'>Categoría: Bajo peso</div>";
            } elseif ($imc >= 18.5 && $imc < 24.9) {
                echo "<div class='result'>Categoría: Peso normal</div>";
            } elseif ($imc >= 25 && $imc < 29.9) {
                echo "<div class='result'>Categoría: Sobrepeso</div>";
            } else {
                echo "<div class='result'>Categoría: Obesidad</div>";
            }
        } else {
            echo "<div class='result'>Por favor, ingresa una estatura válida.</div>";
        }
    }
    ?>
</body>
</html>