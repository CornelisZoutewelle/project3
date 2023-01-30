<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../project3/style.css">
    <title>Subpagina </title>
</head>
<body>
    <main>
        <?php
            include("nav.php");
        ?>
        <section>
            <h1>Subpagina 3</h1>
            <?php
                print(date('l jS \of F Y h:i:s A'));
            ?>
        </section>
    </main>
</body>
</html>