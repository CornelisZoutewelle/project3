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
            <label for="naam">Naam: </label><input type="text" name="naam" placeholder="Naam" required><br><br>
            <label for="reden">Reden: </label><br><textarea name="reden" id="reden" placeholder="Enter text here" style=width:12.8vw; required></textarea><br>
            <input type="submit" name="submit" value="Verzend" id="submit" required>
        </form><br>
    <?php
        include 'functions.php';
        KlachtToevoegen(); 

    ?>
        </section>
    </main>
        <?php
            include 'footer.php';
        ?>
</body>
</html>
