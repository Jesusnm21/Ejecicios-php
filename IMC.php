<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
  
</head>
<body>
    <h1>Calculadora de Índice de Masa Corporal (IMC)</h1>
    <form method="POST" action="IMCRESP.PHP">
        <label for="peso"><h2>Peso (kg):</h2></label><br>
        <input type="number" step="0.1" name="peso" id="peso" required><br>
        <label for="estatura"><h2>Peso (kg):</h2></label><br>
        <input type="number" step="0.01" name="estatura" id="estatura" required><br><br>
        <button type="submit">Calcular IMC</button>
    </form>

    
</body>
</html>
