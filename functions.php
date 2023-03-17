<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

// Main

// 
function ConnectDb(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fietsenmaker"; // <--- DatabaseName
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo "Connected successfully 1<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    #echo "Connected successfully 2<br>";
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

function OvzTable(){
    $result = GetData("fietsen"); // <--- TableName
    PrintTable($result);
}

function PrintTable($result) {
    echo "<table border=1px>";
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo "<th>". $COULUMN_NAME . "</th>";
        }
        echo "<tr>";
            foreach($result as &$row) {
                echo "<tr>";
                    foreach($row as &$cell){
                        echo "<td>" . $cell . "</td>";
                    }
                echo "</tr>";
                }
        echo "</tr>";
    echo "</table>";
}

function OvzTableFietsen(){
    $result = GetData("fietsen"); // <--- TableName
    PrintTable($result);
}

function PrintTableFietsen($result) {
    echo "<table border=1px>";
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo "<th>". $COULUMN_NAME . "</th>";
        }
        echo "<tr>";
            foreach($result as &$row) {
                echo "<tr>";
                    foreach($row as &$cell){
                        echo "<td>" . $cell . "</td>";
                    }
                echo "</tr>";
                }
        echo "</tr>";
    echo "</table>";
}

function OvzFietsen(){
    $result = GetDataFilter("fietsen", "0"); // <--- TableName
    PrintFietsen($result);
}

function PrintFietsen($result){
    echo "<table border=1px>";
    foreach($result[0] as $COULUMN_NAME => $cell){
        echo "<th>". $COULUMN_NAME . "</th>";
    }
    foreach($result as &$data) {
        echo"<tr>";
        echo"<td>";
            echo "<a href='database.php?id=" . $data['id'] . "'>"; // <--- href
                echo $data['id'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?merk=" . $data['merk'] . "'>"; // <--- href
                echo $data['merk'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?type=" . $data['type'] . "'>"; // <--- href
                echo $data['type'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?prijs=" . $data['prijs'] . "'>"; // <--- href
                echo $data['prijs'] . " ";
            echo "</a>";
        echo"</td>";
    
        
        echo "</tr>";       
    }
    echo "</table>";
}

// DetailsPage

function GetDataFilter($table, $filter){
    // Connect database
    $conn = ConnectDb();
    #var_dump($conn);
            
    switch($filter){
        case 1:
            $id = $_GET['id'];
            // Select data uit de opgegeven table // Filter op ID
            $query = $conn->prepare("SELECT * FROM $table WHERE id = $id");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 2:
            $merk = $_GET['merk'];
            // Select data uit de opgegeven table // GEEN Filter
            $query = $conn->prepare("SELECT * FROM $table WHERE merk = '$merk'");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 3:
            // Select data uit de opgegeven table // GEEN Filter
            $query = $conn->prepare("SELECT * FROM $table WHERE type = " . $_GET['type']);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            break;
        case 4:
            // Select data uit de opgegeven table // GEEN Filter
            $query = $conn->prepare("SELECT * FROM $table WHERE prijs = " . $_GET['prijs']);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            break;
        default: 
            // Select data uit de opgegeven table // GEEN Filter
            $query = $conn->prepare("SELECT * FROM $table");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            break;
        }
    return $result;
}


function OvzTableDetails(){
    $result = GetDataFilter("fietsen", "1"); // <--- TableName
    PrintTableDetails($result);
}

function PrintTableDetails($result) {
    foreach($result as &$data) {
        echo "Artikelnummer: " . $data['id'] . "<br>";
        echo "Merk: " . $data['merk'] . "<br>";
        echo "Type: " . $data['type'] . "<br>";
        echo "Prijs: &euro; " .
            number_format($data["prijs"], 2, ",", ".") . "<br><br>";
    }
}

?>
