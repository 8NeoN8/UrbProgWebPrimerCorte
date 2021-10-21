<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Empleados Registrados</title>
</head>
<body>
    <h2 class="header">Los Siguientes Empleados han Sido Registrados</h2>
</body>


<?php

    $empleado=[];

    if($_SERVER["REQUEST_METHOD"]==="POST"){

        if(isset($_POST['submit'])){

            echo "<div class='resCont'>";

            for($i=0;$i<3;$i++){

                $j = $i+1;

                $empleado[$i] = [
            
                    'nombre'=>$_POST['nombre'.$i],
                    'apellido'=>$_POST['apellido'.$i],
                    'cedula'=>$_POST['cedula'.$i],
                    'trabajo'=>$_POST['trabajo'.$i],
                    'departamento'=>$_POST['departamento'.$i],
                    'sueldo'=>$_POST['sueldo'.$i],
                    
                ];
            
                echo "<div class='resultContainer'>";
                
                    echo "<p class='resultData'> <span>Empleado $j</span> <br>";
                        echo "Nombre: "; print_r($empleado[$i]['nombre']);echo "<br>";
                        echo "Apellido: "; print_r($empleado[$i]['apellido']);echo "<br>";
                        echo "Cedula: "; print_r($empleado[$i]['cedula']);echo "<br>";
                        echo "Lugar de Trabajo: "; print_r($empleado[$i]['trabajo']);echo "<br>";
                        echo "Departamento: "; print_r($empleado[$i]['departamento']);echo "<br>";
                        echo "Sueldo: "; print_r($empleado[$i]['sueldo']."$");echo "<br>";
                    echo"</p>";

                echo "</div>";
            }

            echo "</div>";

        }
    }

?>

</html>