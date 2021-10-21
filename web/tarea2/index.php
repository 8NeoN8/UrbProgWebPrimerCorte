<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de Area de Octágono Regular</title>
</head>
<body>
    
    <h1 class="header">Calculo Dinamico de Area de Octagono Regular</h1>

    <div class="container">

        <div class="sub-container">

            <div class="image">

                <img src="./octagono.png" width="200px" height="200px">

            </div>

            <form action="" method="post">
                <p class='dato'>Cantidad de Lados: 8</p>
                <p class='dato'>Angulo Principal: 45°</p>
                <label class='dato' for="sideLenght">Longitud de los Lados</label>
                <input type="number" name="sideLenght" id="sideLenght" min="1" required> <br> <br>
                <button class='submit' type="submit" name="submit" value="submit">Calcular Area</button>
            </form>

        </div>

    </div>


</body>

<?php
    require_once "calc.php";
?>
</html>