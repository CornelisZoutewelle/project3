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
        #echo 'Connected successfully 1<br>';
    } catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    #echo 'Connected successfully 2<br>';
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
    echo '<table border=1px>';
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo '<th>'. $COULUMN_NAME . '</th>';
        }
        echo '<tr>';
            foreach($result as &$row) {
                echo '<tr>';
                    foreach($row as &$cell){
                        echo '<td>' . $cell . '</td>';
                    }
                echo '</tr>';
                }
        echo '</tr>';
    echo '</table>';
}


// Overzicht Fietsen Placeholder

/*
function OvzTableFietsen(){
    $result = GetData("fietsen"); // <--- TableName
    PrintTable($result);
}
*/

function PrintTableFietsen($result) {
    echo '<table border=1px>';
        foreach($result[0] as $COULUMN_NAME => $cell){
            echo '<th>'. $COULUMN_NAME . '</th>';
        }
        echo '<tr>';
            foreach($result as &$row) {
                echo '<tr>';
                    foreach($row as &$cell){
                        echo '<td>' . $cell . '</td>';
                    }
                echo '</tr>';
                }
        echo '</tr>';
    echo '</table>';
}

// Overzicht Fietsen met Filter

function OvzFietsen(){
    $result = GetData("fietsen"); // <--- TableName
    PrintFietsen($result);
}

function PrintFietsen($result){
    echo '<table border=1px>';
    foreach($result[0] as $COULUMN_NAME => $data){
        echo '<th>'. $COULUMN_NAME . '</th>';
    }
    foreach($result as &$data) {
        /*$array = $_POST['array'];
        echo '<form action="?array=';
            echo $array;
        echo '" method="post">';
            echo '<label for="1">:'. $data["naam"] .'</label><input type="text" name="array" value="'.$data["naam"].'" id="1" hidden required><br>';
        echo '</form>';*/
        echo '<tr>';
            echo '<td>';
                echo '<a href="database.php?id='.$data["id"].'">';
                    echo $data["id"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?merk='.$data["merk"].'">';
                    echo $data["merk"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?type='.$data["type"].'">';
                    echo $data["type"];
                echo '</a>';
            echo '</td>';
            echo '<td>';
                echo '<a href="database.php?prijs='.$data["prijs"].'">';
                    echo $data["prijs"];
                echo '</a>';
            echo '</td>';
        echo '</tr>';       
    }
    echo '</table>';
}


// DetailsPage

function OvzTableDetails(){
    $result = GetDataFilter("fietsen"); // <--- TableName
    PrintTableDetails($result);
}

function GetDataFilter($table){
    // Connect database
    $conn = ConnectDb();
    #var_dump($conn);
    if(!empty($_GET)){
        if(isset($_GET["id"])){
            $coulumn = "id";
            $data = $_GET["id"];
            // Filter op ID
        }
        if(isset($_GET["merk"])){
            $coulumn = "merk";
            $data = $_GET["merk"];
            // Filteren op Merk
        }
        if(isset($_GET["type"])){
            $coulumn = "type";
            $data = $_GET["type"];
            // Filteren op Type // Not Working
        }
        if(isset($_GET["prijs"])){
            $coulumn = "prijs";
            $data = $_GET["prijs"];
            // Filteren op Prijs // Need to change to prijs range rather than a fixed prijs.
        }
        // Select data uit de opgegeven table 
        $query = $conn->prepare("SELECT * FROM $table WHERE $coulumn = '$data'");
    }else{
        // Select data uit de opgegeven table // GEEN Filter
        $query = $conn->prepare("SELECT * FROM $table");
    }
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function PrintTableDetails($result) {
    foreach($result as &$data) { 
        echo '<article>';
            echo 'Artikelnummer: ' . $data["id"] . '<br>';
            echo 'Merk: ' . $data["merk"] . '<br>';
            echo 'Type: ' . $data["type"] . '<br>';
            echo 'Prijs: &euro; ' .
                number_format($data["prijs"], 2, ',', '.') . '<br><br>';
        echo '</article>';
    }
}


// Gastenboek

function SessionGastenboek(){
    session_start();

}

function BerichtToevoegen(){
    $conn = ConnectDb();
    $naam = $_POST["naam"];
    $bericht = $_POST["bericht"];
    if(!empty(isset($_POST) && isset($_POST["opslaan"]) && isset($_POST["naam"]) && isset($_POST["bericht"]))){
        $query = $conn->prepare("INSERT INTO gastenboek(naam, bericht) VALUES('$naam','$bericht')");
        $query->execute();
        echo 'Bericht Toegevoegd. <br><br><br>';
    } else {
        echo 'Er is een fout opgetreden! <br><br>';
    }
}
function OvzBerichten(){
    $result = GetData("gastenboek"); // <--- TableName
    PrintTableBerichten($result);
}

function PrintTableBerichten($result){
    foreach($result as &$data) {
        #echo '[' . $data["id"] . '] ';
        echo $data["naam"] . ' - ';
        echo '[' . $data["datumtijd"] . '] ';
        echo '<br>';
        echo $data["bericht"] . ' ';
        #echo '<a href="verwijderbericht_9.6.php?id='. $data["id"]. '">Verwijderen</a>';
        echo '<br><br>';
    }
}

?>
