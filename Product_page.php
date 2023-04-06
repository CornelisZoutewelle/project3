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





<form>
<h1>Model S</h1>

<h3>Dual Motor All-Wheel Drive</h3><br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Model S</label><br><br>
<h3>Tri Motor All-Wheel Drive</h3><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2">Model S Plaid</label><br>

<br><br><br>




  <h1>Set winterbanden</h1><br>
  <h3>€ 4.000</h3><br>
<h3>
<input type="checkbox" id="Toevoegen1" name="Toevoegen1" value="Toevoegen">
  <label for="Toevoegen1">Toevoegen</label><br>
</h3>
<br><br><br>






<p>
<h1>Enhanced Autopilot</h1><br>
<h3>€ 3.800</h3><br>

<lu>
<li>Navigeren met Autopilot<br></li>
<li>Auto Lane Change<br></li>
<li>Automatisch inparkeren<br></li>
<li>Summon<br></li>
<li>Smart Summon<br></li>
</lu></p><br>

<h3>
<input type="checkbox" id="Toevoegen2" name="Toevoegen2" value="Toevoegen">
  <label for="Toevoegen2">Toevoegen</label><br>
</h3>
<br><br> <br>




<p></p>
<h1>Full Self-Driving Capability</h1><br>
<h3>€ 7.500</h3><br>

<lu>
<li>Alle functies van Standaard Autopilot en Enhanced Autopilot</li>
<li>Verkeerslicht- en stopbordherkenning</li>
<li>Binnenkort beschikbaar:</li>
<li>Automatisch sturen op straten binnen de bebouwde kom</li>
</lu></p><br>

<h3>
<input type="checkbox" id="Toevoegen3" name="Toevoegen3" value="Toevoegen">
  <label for="Toevoegen3">Toevoegen</label><br>
</h3>

<br><br><br>


<h1>Wall connector</h1><br>
<h3>€ 500</h3><br>

<h3>
<input type="checkbox" id="Toevoegen4" name="Toevoegen4" value="Toevoegen">
  <label for="Toevoegen4">Toevoegen</label><br>
</h3>

<br><br>


<input type="submit" value="Bestellen">
</form>





<?php
     /*   include 'footer.php'; */
?>

</body>
</html>