<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Subpagina 1</title>
</head>
<body>
    <main>
        <?php
            include '../nav.php';
        ?>
        <section>
            <?php
                echo "Today is " . date("Y/m/d") . "</br>";
            ?>
        </section>
    </main>
</body>
</html>