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

<!-- form voor de opties -->

<div class="a">
<h1>Tesla Model S</h1><br>
    <form action="Betalen.php" method="get">
    <input type="checkbox"  name="keuze[]" value="1"/>Set winterbanden: € 4.000<br/>
    <input type="checkbox"  name="keuze[]" value="2"/>Enhanced Autopilot: € 3.800<br/>
    <input type="checkbox"  name="keuze[]" value="3"/>Full Self-Driving Capability: € 7.500<br/>
    <input type="checkbox"  name="keuze[]" value="4"/>Wall connector: € 500<br/>

        <input type="submit" value="Bestellen"/>
    </form>
    </div>
    
    <img class="Product" src="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options=$MTS13,$PPSW,$WS90,$IBE00&view=FRONT34&model=ms&size=1920&bkba_opt=1&crop=1300,550,300,250&" alt="Product" style="width5000px;height:500px;margin-left:15px;">
<?php
       include 'footer.php'; 
?>
<style>
img {
  float: right;
}


div.a {
  font-size: 15px;
}
</style>

</body>
</html>