<?php
//include "calendar.php";
$t=time();
if (isset($_POST['save_schedule'])) {
//$saved_date = "2023-10-4";
//$id_of_shift = "123";
//$saved_name= "hello";
//$saved_from = "17:00:00";
$time='Khjkfsa';
$mysqli_sav = require __DIR__ . "/database.php";
//$max = $supermax;
$max = $_SESSION ["sup"];

echo "Max is " . $max;

for ($g = 1; $g < 100; $g++) {

for ($i = 1; $i < 32; $i++) {
    $conn_sav = new mysqli($host, $username, $password, $dbname);
//$conn_sav->close();
    if($i <10){
       $vv = '0'. $i;
    }else{
        $vv = $i;
    }
    if($g <10){
        $ml ='0'. '0'. $g;
     }else if($g <100){
         $ml = '0'.$g;
     }else{
        $ml = $g;
     }
    $fr = 'tf'.$vv .'-'.$ml;
    $to = 'tt'.$vv .'-'.$ml;
    $nma = 'h00-'.$ml;
    $idn = 'i00-'.$ml;
    
    $wwdk = "tf01-001";
$saved_from = $_POST[$fr];
//$saved_to = "19:00:00";
$saved_to = $_POST[$to];
$saved_name = $_POST[$nma];
$id_of_shift = $_POST[$idn];
$slk = $_POST['current_load_date'];
$saved_date = $slk. '-'.$vv;
echo $saved_date;

//$saved_date = "2023-1-4";
echo $nma ;
echo "<br>";

$check_unique_row = mysqli_query($conn_sav, "SELECT * FROM saved_shift WHERE saved_date = '$saved_date' AND id_of_shift=$id_of_shift");


if (mysqli_num_rows($check_unique_row) == 0) {
    $sqlsav = "INSERT INTO saved_shift (saved_date, id_of_shift, saved_name, saved_from, saved_to, up_timestamp)
    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt20 = $mysqli_sav->prepare($sqlsav);
            $stmt20->bind_param(
                "sisssi",
                $saved_date,
                $id_of_shift,
                $saved_name,
                $saved_from,
                $saved_to,
                $t

            );
            if ($stmt20->execute()) {
                /*header("Location: create_shift.php");
                exit;*/
            }
            $conn_sav->close();
            //$mysqli_sav->close();
            //$mysqli_sav->close();

        }else{
            $sqlsav = "UPDATE saved_shift SET saved_from='$saved_from', saved_to='$saved_to' , up_timestamp=$t WHERE saved_date='$saved_date' AND id_of_shift=$id_of_shift";
            $conn_sav->query($sqlsav);
            //$conn_sav->close();
        }
        //$conn_sav->close();
        //$mysqli_sav->close();

        //$mysqli_sav->close();

}
}
}
$mysqli_sav->close();
?>