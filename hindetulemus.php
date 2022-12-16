<html>
<body>
<?php
    $tulemus = $_POST["tulemus"];
    $lavend = $_POST["lavend"];
    $neli = $_POST["neli"];
    $viis = $_POST["viis"];

        if( $tulemus < $lavend){
            echo "Sa kahjuks ei pääsend tööst läbi";
        }
        else if($tulemus >= $lavend){
            if($tulemus < $neli){
                echo "Sa said hindeks kolme";
            }
            if($tulemus >= $neli && $tulemus < $viis){
                echo "Sa said hindeks nelja!";
            }
            if($tulemus >= $viis){
                echo "Sa said hindeks viie!";
            }
        }
?>
</body>
</html>