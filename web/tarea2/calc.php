<?php
    if(isset($_POST['submit'])){

        $long=0;
        $long = $_POST['sideLenght'];
        $perimetro = $long * 8;
        $mitadAngulo = deg2rad(45/2);
        $apotema = round($long/(2*(tan($mitadAngulo))));
        $area = round(($perimetro * $apotema)/2);

        echo "<div class='container'>";
        echo "<p class='dato'>Perimetro del Octágono: $perimetro <br> 
        Apotema del Octágono: $apotema <br>
        Area del Octágono: $area
        </p>";
        echo "</div>";
    }
?>