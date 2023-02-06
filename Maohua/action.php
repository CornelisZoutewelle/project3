<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="test3.css">
    <title>Subpagina 3 Action</title>
</head>
<body>
    <header>
        <?php
            include '../nav.php';
        ?>
    </header>
    <main>
        <section>
            <?php
                $name = $_POST['name']; /*Store username in variable*/
                $pass = $_POST['pass']; /*Store password in variable*/
                if(strlen($name) <= 5) {    /*Print foutmelding als username kleiner dan of gelijk aan 5 tekens*/
                    echo"Error the username is less than 5 characters <br>";
                    echo "Today is " . date("d/m/Y") . "<br>";
                    echo "Username: $name<br>"; /*Print Username*/
                    echo "Password: $pass<br>"; /*Print Password*/
                } else {
                    echo "Today is " . date("d/m/Y") . "<br>";
                    echo "Username: $name<br>"; /*Print Username*/
                    echo "Password: $pass<br>"; /*Print Password*/
                }
            ?>
            <?php
                echo "<br><br>";
                echo "<h2>Opdracht Array</h2><br>";
                /*    $a[0] = "rob";
                $a[1] = "jan";*/            
                $a = array("rob", "jan", "piet");
                echo "$a[1]";
                echo "<br><br>";
                var_dump($a);
                echo "<br><br>";
                echo"<table style='border-collapse: collapse; border: 1px solid black;'>";
                echo "<tr>";
                    echo "<td style='border: 1px solid black; width: 100px;'>" . "Overzicht namen" . "</td>";
                echo "</tr>";
                foreach($a as &$naam) {
                    echo "<tr>";
                        echo "<td style='border: 1px solid black; width: 100px;'>" . $naam . "</td>";
                    echo "</tr>";
                }
            echo"<table>";
            echo "<br><br>";
            $str = "abcdefghijklmnopqrstuvwxyz";
            echo strlen($str);
            echo "<br><br>";
            ?>
        </section>
    </main>
</body>
</html>