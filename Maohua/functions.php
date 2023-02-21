<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

// Main

// 
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

function GetData($table) {
    // Connect database
    $conn = ConnectDb();
    var_dump($conn);
    
    // Select data uit de opgegeven table
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function OvzBieren(){
    try {
        // Haal alle bier record uit de table
        $result = GetData('bier'); 
        echo"<br><br>";
        // Print table
        echo"<table>";
        echo "<tr>";
            echo "<td>" . "Bier Code " . "</td>";
            echo "<td>" . "Bier Naam " . "</td>";
            echo "<td>" . "Alcohol % " . "</td>";
        echo "</tr>";
        foreach($result as &$data) {
            echo "<tr>";
                echo "<td>" . $data["biercode"] . "</td>";
                echo "<td>" . $data["naam"] . "</td>";
                echo "<td>" . $data["alcohol"] . "</td>";
            echo "</tr>";
        }
    echo"</table>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
}

function OvzBrouwers(){
    // Haal alle bier record uit de table
    $result = GetData('brouwer'); 
    echo"<br><br>";
    // Print table
    echo"<table>";
            echo "<tr>";
                echo "<td>" . "Brouwer Code " . "</td>";
                echo "<td>" . "Brouwer Naam " . "</td>";
                echo "<td>" . "Land " . "</td>";
            echo "</tr>";
            foreach($result as &$data) {
                echo "<tr>";
                    echo "<td>" . $data["brouwcode"] . "</td>";
                    echo "<td>" . $data["naam"] . "</td>";
                    echo "<td>" . $data["land"] . "</td>";
                echo "</tr>";
            }
        echo"</table>";
    }
?>