<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betaal_Pagina.php</title>
</head>
<body>
    <?php
    if(isset($_GET["keuze"])){
        $vehicle=$_GET["keuze"];
        $c= 	count($vehicle);
        $price= 0.0;

        for($i=0;$i<$c;$i++) {
            
            if($vehicle[$i]==1){
                $price=$price+4000;
                echo "U heeft winterbanden geselecteerd<br>";
            }
            if($vehicle[$i]==2){
                $price=$price+3800;
                echo "U heeft Enhanced Autopilot geselecteerd<br>";
            }
            if($vehicle[$i]==3){
                $price=$price+7500;
                echo "U heeft Full Self-Driving Capability geselecteerd<br>";
            }
            if($vehicle[$i]==4){
                $price=$price+500;
                echo "U heeft een Wall connector geselecteerd<br>";
            }

        }
        echo "De totaalprijs is: " .$price. "<br>";
    }

    else{
        echo "please choose something!";
    }

    ?>
</body>
</html>