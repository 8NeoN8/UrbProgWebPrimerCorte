<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro de Empleados</title>
</head>
<body>
    <h1 class="header">Registro de 3 Empleados</h1>
</body>

<?php

    echo "<div class='form'>";

        echo "<form action='result.php' method='POST'>";

            for($i=0;$i<3;$i++){
                
                $j = $i+1;

                echo "<div class='container'>";

                    echo "<h2>Empleado $j</h2>";

                    echo "<div class='subContainer cont$i'>";

                        echo "<label for='name$i' class='labels'>Nombre</label>
                        <input type='text' name='nombre$i' id='nombre$i' class='inputs' required>";

                        echo "<label for='apellido$i' class='labels'>Apellido</label>
                        <input type='text' name='apellido$i' id='name$i' class='inputs' required>";

                    echo "</div>";

                    echo "<div class='subContainer cont$i'>";

                        echo "<label for='cedula$i' class='labels'>Cedula</label>
                        <input type='number' name='cedula$i' id='name$i' class='inputs' min='1' required>";

                        echo "<label for='trabajo$i' class='labels'>Trabajo</label>
                        <input type='text' name='trabajo$i' id='name$i' class='inputs' required>";

                    echo "</div>";

                    echo "<div class='subContainer cont$i'>";

                        echo "<label for='departamento$i' class='labels'>Departamento</label>
                        <input type='text' name='departamento$i' id='name$i' class='inputs' required>";

                        echo "<label for='sueldo$i' class='labels'>Sueldo</label>
                        <input type='number' name='sueldo$i' id='name$i' class='inputs' min='1' required>";

                    echo "</div>";

                echo "</div>";

            }

            echo "<button type='submit' class='submit' name='submit' value='submit'>Completado</button>
        </form>";

    echo "</div>";

?>

</html>