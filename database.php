<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="../Maohua/test3.css">-->
    <script src="script3.js"></script>
    <title>Subpagina 3</title>
</head>
<body>
    <header>
        <?php
            include 'index_nav.php';
        ?>
    </header>
    <main>
        <section>
    <?php
        include 'functions.php';
        #OvzTableFietsen();
        #echo "<br><br>";
        OvzFietsen();
        echo "<br><br>";
        OvzTableDetails();

    ?>
        </section>
    </main>
        <?php
            include 'footer.php';
        ?>
</body>
</html>
