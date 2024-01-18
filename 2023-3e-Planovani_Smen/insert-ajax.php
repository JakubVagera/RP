
<?php
$fromArr = json_decode($_POST["from"]);
$toArr = json_decode($_POST["to"]);
$idArr = json_decode($_POST["id_shift"]);
$dateArr = json_decode($_POST["date"]);
$deleteArr = json_decode($_POST["id_delete"]);
$YM = $_POST['dateym'];
$time = time();
$mysqli_sav = require __DIR__ . "/database.php";
$con = new mysqli($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

for ($x = 0; $x < count($fromArr); $x++) {
    if (($fromArr[$x] != "")) { /*not allowing empty values and the row which has been removed.*/


        $check_unique_row = mysqli_query($con, "SELECT * FROM saved_shift_data WHERE saved_date = '$dateArr[$x]' AND id_of_shift='$idArr[$x]'");

        if (mysqli_num_rows($check_unique_row) == 0) {

            $sql = "INSERT INTO saved_shift_data (saved_date, id_of_shift, saved_from, saved_to, up_timestamp)
VALUES
('$dateArr[$x]','$idArr[$x]','$fromArr[$x]','$toArr[$x]','$time')";
            if (!mysqli_query($con, $sql)) {
                die('Error: ' . mysqli_error($con));
            }
        } else {
            $sqlsav = "UPDATE saved_shift_data SET saved_from='$fromArr[$x]', saved_to='$toArr[$x]' , up_timestamp='$time' WHERE saved_date='$dateArr[$x]' AND id_of_shift='$idArr[$x]'";
            $con->query($sqlsav);
        }
    }
}
$day = "";

for ($x = 0; $x < count($deleteArr); $x++) {
    
    $year = substr($YM, 0,-3);
    $month = substr($YM, -2);
    $check_shift = "SELECT * FROM shift_check WHERE id_shift = '$deleteArr[$x]' AND year_shift='$year' AND month_shift='$month'";
    $check_unique_save = mysqli_query($con, $check_shift);
    if (mysqli_num_rows($check_unique_save) == 0) {
        $sql_shift = "INSERT INTO shift_check (id_shift, year_shift, month_shift)
        VALUES
('$deleteArr[$x]','$year','$month')";
            if (!mysqli_query($con, $sql_shift)) {
                die('Error: ' . mysqli_error($con));
            }
    }
    for( $z = 1; $z < 32; $z++) {
        if($z <10){
            $day = "0" . $z;
        }else{
            $day = $z;
        }
        $date = $YM . "-". $day;
        $up_time = "SELECT * FROM saved_shift_data WHERE saved_date = '$date' AND id_of_shift='$deleteArr[$x]'";
        $result = $con->query($up_time);
        while($row = $result->fetch_assoc()) {
            $last_up = $row['up_timestamp'];
        }
        if($last_up < $time) {
            $sqldel = "DELETE FROM saved_shift_data WHERE saved_date = '$date' AND id_of_shift='$deleteArr[$x]'";
            $con->query($sqldel);
        }
    }
}
print "Data added Successfully !";
mysqli_close($con);
?>




