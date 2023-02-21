<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

// Main

// 
function ConnectDb(){

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
    #var_dump($conn);
    
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
        echo "<table border=1px>";
        // Print COULUMN_NAME
        PrintHeader('bieren', 'bier');
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
    echo "<table border=1px>";
    // Print COULUMN_NAME
    PrintHeader('bieren', 'brouwer');
    foreach($result as &$data) {
        echo "<tr>";
            echo "<td>" . $data["brouwcode"] . "</td>";
            echo "<td>" . $data["naam"] . "</td>";
            echo "<td>" . $data["land"] . "</td>";
        echo "</tr>";
    }
    echo"</table>";
    }

function PrintHeader($dbname, $table){
    // Connect database
    $conn = ConnectDb();
    // Select data uit de COULUMN_NAME
    $query = $conn->prepare("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$dbname' AND `TABLE_NAME`='$table';");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<tr>";
        foreach($result as &$data) {
            echo "<td>" . $data["COLUMN_NAME"] . " </td>";
        }
    echo "</tr>";
}

function PrintTable() {
    // 
}

function PrintR(){
    // 
}

?>