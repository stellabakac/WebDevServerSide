<?php
/** Database config connection */
/**
 * Uses the following to make a connection:
 * host (hostname)
 * username (to login)
 * password (to login)
 * dbname (the name of the db you wish to connect to)
 * DSN (Data Source Name)
 * Options (I think we know what this does)(Joking... Extra parameters for your query/connection)
 */

// var declaration

$host = "localhost";
$username = "root";
$password = "pass";
$dbname = "test";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
?>
