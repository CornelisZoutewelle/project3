<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

function ConnectDb(){
    echo "connect<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bieren";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully 1<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    echo "Connected successfully 2<br>";
    return $conn;
}

function OvzBieren(){
    echo"<br><br><br>";
    echo"overzicht<br>";

}
?>