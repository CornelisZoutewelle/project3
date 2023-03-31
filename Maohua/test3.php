<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Placeholder Pagina</title>
</head>
<body>
    <main>
        <?php
            include '../index_nav.php';
            #header('Location: ../index.php');
        ?>
        <section>
            <h1>Model S</h1>
            <form action="" method="post">
                <label for="color"> Color: 
                    <select name="var2" id="color">
                        <option value="1">White</option>
                        <option value="2">Black</option>
                        <option value="3">Silver</option>
                        <option value="4">Blue</option>
                        <option value="5">Red</option>
                    </select><br>
                </label>
                <label for="wheels"> Wheels: 
                    <select name="var3" id="wheels">
                        <option value="1">Tempest Wheels</option>
                        <option value="2">Arachnid Wheels</option>
                    </select><br>
                </label>
                <label for="interior"> Interior: 
                    <select name="var4" id="interior">
                        <option value="1">All Black</option>
                        <option value="2">Black and White</option>
                        <option value="3">Cream</option>
                    </select><br>
                </label>
                <label for="view"> View: 
                    <select name="var5" id="view">
                        <option value="1">FRONT34</option>
                        <option value="2">SIDE</option>
                        <option value="3">REAR34</option>
                        <option value="4">RIMCLOSEUP</option>
                        <option value="5">INTERIOR</option>
                    </select><br>
                </label>
                <br><input type="submit" name="submit" value="Submit">
            </form>
            <?php
                $a ='$MTS13';
                if($a = '$MTS13'){
                    $e2 = '';
                    $var2 = $_POST['var2']; // 5 cases
                    $var3 = $_POST['var3']; // 2 cases
                    $var4 = $_POST['var4']; // 3 cases
                    $var5 = $_POST['var5']; // 5 cases
                    switch($var2){
                        case 1:
                            $b = '$PPSW'; // Color White
                            break;
                        case 2:
                            $b = '$PBSB'; // Color Black
                            break;
                        case 3:
                            $b = '$PMNG'; // Color Gray
                            break;
                        case 4:
                            $b = '$PPSB'; // Color Blue
                            break;
                        case 5:
                            $b = '$PR01'; // Color Red
                            break;
                        default:
                            $b = '$PPSW'; // Color White
                            break;
                    }

                    switch($var3){
                        case 1:
                            $c = '$WS91'; // Wheels Tempest
                            break;
                        case 2:
                            $c = '$WS11'; // Wheels Arachnid
                            break;
                        default:
                            $c = '$WS91'; // Wheels Tempest
                            break;
                    }

                    switch($var4){
                        case 1:
                            $d = '$IBE00'; // Interior Black
                            break;
                        case 2:
                            $d = '$IWW00'; // Interior Black & White
                            break;
                        case 3:
                            $d = '$ICW00'; // Interior Cream
                            break;
                        default:
                            $d = '$IBE00'; // Interior Black
                            break;
                    }

                    switch($var5){
                        case 1:
                            $e = 'FRONT34'; // View FRONT34
                            break;
                        case 2:
                            $e = 'SIDE'; // View SIDE
                            break;
                        case 3:
                            $e = 'REAR34'; // View REAR34
                            break;
                        case 4:
                            $e = 'RIMCLOSEUP'; // View RIMCLOSEUP
                            break;
                        case 5:
                            $e = 'INTERIOR'; // View INTERIOR
                            $e2 = '$ST03'; // ?
                            break;
                        default:
                            $e = 'FRONT34'; // View FRONT34
                            break;
                    }
                } else {
                    echo 'A problem as occured';
                }
                if(!empty(isset($_POST) && isset($_POST['submit'])))
                    #header('Location: https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$a.','.$b.','.$c.','.$d.'&view='.$e.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&');
                    if ($var5 = 5){
                        echo'<embed type="image/jpg" src="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$a.','.$b.','.$c.','.$d.','.$e2.'&view='.$e.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&" width="500" height="200">';
                    } else {
                        echo'<embed type="image/jpg" src="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$a.','.$b.','.$c.','.$d.'&view='.$e.'&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&" width="500" height="200">';
                    }
            ?>         
        </section>
    </main>
        <?php
            include '../footer.php';
        ?>
</body>
</html>
