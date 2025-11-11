<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina2.php" method="post">
        <h1>Ingrese Primer valor: </h1>
        <input type="text" name="valor1">
        <br> <br>
        <h1>Ingrese Segundo valor: </h1>
        <input type="text" name="valor2">
        <br> <br>
        <input type="radio" name="radio1" value="suma">sumar
        <br> <br>
        <input type="radio" name="radio1" value="resta">restar
        <br> <br>
        <input type="submit" name="operar">
    </form>
</body>
</html>