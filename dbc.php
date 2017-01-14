<?php

// connect to database
//$dbc = mysqli_connect("localhost", "root", "");

$dbc = new mysqli("localhost", "***", "");

// Check connection
if ($dbc->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS fun";

if ($dbc->query($sql) === TRUE) {
    printf("Database successfully created!.\n");
}

$dbc->close();