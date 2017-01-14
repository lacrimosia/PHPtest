<?php

// gets the connection to db info here
// $dbc is connection string
require('dbc.php');

// reconnect to db after creation
$dbc = new mysqli("localhost", "****", "", "fun");

// the name to send
$myName = "Roda";

$createTable = "CREATE TABLE IF NOT EXISTS Persons (id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(50) NOT NULL)";

$insertName = "INSERT INTO Persons (firstname) VALUES ('$myName')";

// Perform queries
if ($dbc->query($createTable) === TRUE) {
    echo " Table has been created! ";
} else {
    echo " Error creating table: " . mysqli_error($dbc);
}

// Perform queries
if ($dbc->query($insertName) === TRUE) {
    echo "Inserted Name! ";
} else {
    echo " Error adding name: " . mysqli_error($dbc);
}


$dbc->close();


