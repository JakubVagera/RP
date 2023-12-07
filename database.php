<?php
/**This file allows connection to database */
$host = "localhost";/**register information for database */
$dbname = "login_db2";
$username = "login_db2";
$password = "phpmyadmin";

/**insert login paramenters */
$mysqli = new mysqli($host,$username, $password, $dbname);

/**connection error */
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
