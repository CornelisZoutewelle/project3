<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klachten Medewerker</title>
</head>
<body>
    <header>
        <?php
            include 'index_nav.php';
        ?>
    </header>
    <main>
        <section>
        <br><br>
        <form action="#" method="post">
            <label for="naam">Naam: </label>
                <input type="text" name="naam" placeholder="Naam" required><br><br>
            <label for="bericht">Bericht: </label> <br>
                <textarea name="bericht" id="bericht" placeholder="Enter text here" required></textarea><br>
                <!--<input type="text" name="bericht" placeholder="Bericht" required><br>-->
            <input type="submit" name="opslaan" required>
        </form><br>
    <?php
        include 'functions.php';
        BerichtToevoegen();
        OvzBerichten();   

    ?>
        </section>
    </main>
        <?php
            include 'footer.php';
        ?>
</body>
</html>
