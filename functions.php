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
            echo "<a href='database.php?id=" . $data['id'] . "&filter=1'>"; // <--- href
                echo $data['id'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?merk=" . $data['merk'] . "&filter=2'>"; // <--- href
                echo $data['merk'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?type=" . $data['type'] . "&filter=3'>"; // <--- href
                echo $data['type'] . " ";
            echo "</a>";
        echo"</td>";
        echo"<td>";
            echo "<a href='database.php?prijs=" . $data['prijs'] . "&filter=4'>"; // <--- href
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
            $statement = "id";
            $id = $_GET['id'];
            // Select data uit de opgegeven table // Filter op ID
            $query = $conn->prepare("SELECT * FROM $table WHERE $statement = $id");
            break;
        case 2:
            $statement = "merk";
            $merk = $_GET['merk'];
            // Select data uit de opgegeven table // Filteren op MERK
            $query = $conn->prepare("SELECT * FROM $table WHERE $statement = '$merk'");
            break;
        case 3:
            $statement = "type";
            $type = $_GET['type'];
            // Select data uit de opgegeven table // Filteren op Type // Not Working
            $query = $conn->prepare("SELECT * FROM $table WHERE $statement = $type");
            break;
        case 4:
            $statement = "prijs";
            $prijs = $_GET['prijs'];
            // Select data uit de opgegeven table // Filteren op Prijs // Need to change to prijs range rather than a fixed prijs.
            $query = $conn->prepare("SELECT * FROM $table WHERE $statement = $prijs");
            break;
        default: 
            // Select data uit de opgegeven table // GEEN Filter
            $query = $conn->prepare("SELECT * FROM $table");
            break;
        }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


function OvzTableDetails(){
    $filter = $_GET['filter'];
    $result = GetDataFilter("fietsen", "$filter"); // <--- TableName
    PrintTableDetails($result);
}

function PrintTableDetails($result) {
    foreach($result as &$data) { 
        echo "<article>";
            echo "Artikelnummer: " . $data['id'] . "<br>";
            echo "Merk: " . $data['merk'] . "<br>";
            echo "Type: " . $data['type'] . "<br>";
            echo "Prijs: &euro; " .
                number_format($data["prijs"], 2, ",", ".") . "<br><br>";
        echo "</article>";
    }
}

?>
