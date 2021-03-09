<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_hotel";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
} else {
  echo "Connection done." . '<br><br>';
}


$sql = "SELECT prenotazione_id, ospite_id , ospiti.name, ospiti.lastname FROM prenotazioni_has_ospiti JOIN ospiti ON prenotazioni_has_ospiti.ospite_id = ospiti.id;";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 'prenotazione id: ' . $row['prenotazione_id'] . '<br>' . 'ospite id: ' . $row['ospite_id'] . '<br>' . 'name: '. $row['name'] . '<br>' . 'lastname: '. $row['lastname'] . '<br><br>';
  }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();
