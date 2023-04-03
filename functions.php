<?php
// Functie: Algemene functies tbv hergebruik
// Auteur: 

// Main

// 
function ConnectDb(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tesla"; // <--- DatabaseName
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo 'Connected successfully 1<br>';
    } catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    #echo 'Connected successfully 2<br>';
    return $conn;
}

function GetData($table, $extend) {
    // Connect Database
    $conn = ConnectDb();
    #var_dump($conn);
    
    // Select data uit de opgegeven table
    if(empty($extend)){
        $extend = '';
    }
    $query = $conn->prepare("SELECT * FROM $table :extend");
    #$query->bindParam(':table', $table);
    $query->bindParam(':extend', $extend);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function GetDataFilter($table){
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
        $extend = "WHERE $coulumn = '$data'";
        $result = GetData($table, $extend);
    } return $result;
}

function OvzTable(){
    $result = GetData("fietsen",''); // <--- TableName
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
    $result = GetData("fietsen",''); // <--- TableName
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
    $result = GetData("fietsen",''); // <--- TableName
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


// Klachtenboek
function KlachtToevoegen($soort){
    $conn = ConnectDb();
    if(!empty(isset($_POST) && isset($_POST["submit"]))){
        $naam = $_POST["naam"];
        $reden = $_POST["reden"];
        if(!empty(isset($_POST["naam"]) && isset($_POST["reden"]))){
            $query = $conn->prepare("INSERT INTO klachtenboek(soort_id, naam, reden) VALUES('$soort','$naam','$reden')");
            $query->execute();
            echo 'Uw Bericht is Toegevoegd. <br><br><br>';
        } else {
            echo 'Er is een fout opgetreden! <br><br>';
        }
    } else {
        exit;
    }

}
function OvzBerichten(){
    $result = GetData("klachten", ''); // <--- TableName
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


// Login Pagina
function Login(){
    $conn = ConnectDb();
    if (isset($_POST["login"])) {
        $email = filter_input(INPUT_POST, "email", FILTER_UNSAFE_RAW);
        $password = $_POST['password'];
        $query = $conn->prepare("SELECT * FROM gebruikers WHERE email = $email");
        $query->execute();
        if($query->rowCount() == 1){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $result["password"])) {
                echo "Juiste gegevens";
            } else {
                echo "Onjuiste gegevens! <br>";
            }
        } else {
            echo "Onjuiste gegevens! <br>";
        }
    }
}

function Register(){
    if(isset($_POST['register'])){
        $conn = ConnectDb();
        try {
            $voornaam = $_POST['voornaam'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $password_unsafe = $_POST['password'];
            $password = password_hash($password_unsafe, PASSWORD_DEFAULT);
            $query = $conn->prepare("INSERT INTO gebruikers(voornaam,achternaam,email,password)VALUES($voornaam','$achternaam','$email','$password)");
            if($query->execute()) {
                echo "De nieuwe gegevens zijn toegevoed.";
            } else {
                echo "Er is een fout opgetreden!";
            }
        } catch(PDOException $e) {
            echo "Error!: " . $e->getMessage();
        }
    }
}
?>
