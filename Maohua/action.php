
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <?php
                $name = $_POST['name']; /*Store username in variable*/
                $pass = $_POST['pass']; /*Store password in variable*/
                if(strlen($name) <= 5) {    /*Print foutmelding als username kleiner dan of gelijk aan 5 tekens*/
                    echo"Error the username is less than 5 characters <br>";
                    echo "Username: $name<br>"; /*Print Username*/
                    echo "Password: $pass<br>"; /*Print Password*/
                } else {
                    echo "Username: $name<br>"; /*Print Username*/
                    echo "Password: $pass<br>"; /*Print Password*/
                }
            ?>
        </section>
    </main>
</body>
</html>