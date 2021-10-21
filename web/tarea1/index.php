<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de hipotenusa</title>
</head>
<body>
    
<h1 class='header'>Calculo de la hipotenusa de un triangulo</h1>
<div class='container'>
    <div>
        <p class='side'>Lado A: 4 cm</p>
        <p class='side'>Lado B: 3 cm</p>
        <form action="" method="post">
            <button type="submit" name="calculate" value="calculate">Calcular</button>
        </form>

        <?php

            $sideA = 4;
            $sideB = 3;
            $hipo = sqrt(pow($sideA,2) + pow($sideB,2));

            if(isset($_POST['calculate'])){
                echo "<p class='hipo'> Hipotenusa: $hipo cm</p>";
            }            

        ?>
    </div>
</div>

</body>



</html>