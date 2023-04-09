<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Page</title>
</head>
<body>
<header>
        <?php
            include 'index_nav.php';
        ?>
</header>

<h1>Tesla Model S</h1>
    <form action="Betalen.php" method="get">
    <input type="checkbox"  name="keuze[]" value="1"/>Set winterbanden: € 4.000<br/>
    <input type="checkbox"  name="keuze[]" value="2"/>Enhanced Autopilot: € 3.800<br/>
    <input type="checkbox"  name="keuze[]" value="3"/>Full Self-Driving Capability: € 7.500<br/>
    <input type="checkbox"  name="keuze[]" value="4"/>Wall connector: € 500<br/>

        <input type="submit" value="Bestellen"/>
    </form>

    

<?php
     /*   include 'footer.php'; */
?>

</body>
</html>