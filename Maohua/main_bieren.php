<link rel="stylesheet" href="test3.css">
<?php
// Functie: Programma overzicht bieren
// Auteur: 

// Initiallisatie
include 'functions.php';

// Main


// Connect database bieren
$conn = ConnectDb();
var_dump($conn);


// Print bieren
OvzBieren($conn);

?>