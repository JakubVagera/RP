<?php
/**This file allows connection to the database */
/**Register information for the database */




/**-Connection to a localhost database
 * -Accessible by PHPMyadmin
 */


$host = "localhost";
$dbname = "login_db2";
$username = "login_db2";
$password = "phpmyadmin";
$port = 3306;



/**
 * -Connection to a global database
 * -Currently there is some issue with a authentication key
 * -Can not by accessed by PHPMyadmin
 * -It has unsecured connection so do not sent any important data 
 */
/*
$host = "rp.toskanka.cz";
$dbname = "login_db2";
$username = "login_db2";
$password = "";
$port = 3306;*/


/**This part insert login paramenters */
$mysqli = new mysqli($host,$username, $password, $dbname, $port);



/**Some testing code */


/*mysqli_init() 
$mysqli->mysqli_options(MYSQLI_OPT_CONNECT_TIMEOUT,10);
$mysqli->mysqli_real_connect($host,$username, $password, $dbname, $port); 
*/

/**connection error */
/*echo phpversion();
echo "<br>";
echo mysqli_info($mysqli);
echo "<br>";*/
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>
