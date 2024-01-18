<?php
/**File for some leftover code */



$host = "rp.toskanka.cz";
$dbname = "login_db2";
$username = "login_db2";
$password = "Pass@db2";
$port = 3306;
 /*$mysqli = new mysqli($host,$username,$password,$dbname,$port);
 
 // Check connection
 $mysqli->set_charset('utf8mb4');
 if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;*/

$link = mysqli_connect($host,$username,$password,$dbname,$port);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

return $link;


//<div class="logo"><a href="test_home_page.php">Home : <?= $cons ?> <?= htmlspecialchars($user["firstname"]) ?> <?= htmlspecialchars($user["middlename"]) ?> <?= htmlspecialchars($user["lastname"]) ?> </a></div>
<!--<p id="<?php echo $rows['id'] ?> p1" value="<?php echo $rows['email']; ?>"><button id="<?php echo $rows['id'] ?>" onclick="copyfunction(this.id)"></button><?php echo $space;?>  <?php echo $rows['email']; ?></p>-->

?>




<?php
/*function create_sub_table()
{
  $sub_is_empty = true;
  if (!empty($_POST["new_sub_object"])) {
    $sub_is_empty = false;
  }
  if ($sub_is_empty == false) {
    $name2 = $_POST['new_sub_object'];
    $replacement2 = array(" ", "/", "*", "'", "[");
    $slot2 = str_replace($replacement2, '_', $name2);

    $name3 = $_POST['box'];
    $replacement3 = array(" ", "/", "*", "'", "[");
    $slot3 = str_replace($replacement3, '_', $name3);

    $mysqli2 = require __DIR__ . "/database.php";


    $conn2 = new mysqli($host, $username, $password, $dbname);
    $query2 = "select 1 from $slot2 ";
    $isTableExists2 = mysqli_query($conn2, $query2);


    if (!$isTableExists2) {
      //echo "Table do not exists";
      //echo $slot3;

      $sql3 = "CREATE TABLE $slot2 (
     id_sub_tables INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     sub_table_name VARCHAR(255) NOT NULL,
     sub_real_table_name VARCHAR(255) NOT NULL
      )";

      $conn2->query($sql3);



      $sql4 = "INSERT INTO $slot3 (sub_table_name, sub_real_table_name)
        VALUES (?,?)";

      $stmt2 = $mysqli2->stmt_init();
      $stmt2->prepare($sql4);

      $stmt2->bind_param(
        "ss",
        $slot2,
        $_POST["new_sub_object"]
      );
      $stmt2->execute();
      $conn2->close();
    } else {
      echo "Table exists";
      $conn2->close();
    }

  }

}*/
?>