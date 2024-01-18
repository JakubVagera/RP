<?php

if (isset($_POST['v'])) {
    $jobname_invalid = true;
    if (!empty($_POST["jobname"])) {
        $jobname_invalid = false;
    }
    if ($jobname_invalid == false) {
        $mysqli_sh2 = require __DIR__ . "/database.php";


        $conn_sh2 = new mysqli($host, $username, $password, $dbname);
        $conn_sh2->close();
        $tr = 1;
        $d = "2023-10-11";

        $t = "";



        if ($_POST['monday'] == '1') {
            $mon = 1;

        } else {
            $mon = 0;
        }
        if ($_POST['tuesday'] == '1') {
            $tue = 1;

        } else {
            $tue = 0;
        }
        if ($_POST['wednesday'] == '1') {
            $wed = 1;

        } else {
            $wed = 0;
        }
        if ($_POST['thursday'] == '1') {
            $thu = 1;

        } else {
            $thu = 0;
        }
        if ($_POST['friday'] == '1') {
            $fri = 1;

        } else {
            $fri = 0;
        }
        if ($_POST['saturday'] == '1') {
            $sat = 1;

        } else {
            $sat = 0;
        }
        if ($_POST['sunday'] == '1') {
            $sun = 1;

        } else {
            $sun = 0;
        }
        $mon_from = "";
        $mon_to = "";
        $tue_from = "";
        $tue_to = "";
        $wed_from = "";
        $wed_to = "";
        $thu_from = "";
        $thu_to = "";
        $fri_from = "";
        $fri_to = "";
        $sat_from = "";
        $sat_to = "";
        $sun_from = "";
        $sun_to = "";
        $mon_from = $_POST['frommonday'];
        if (empty($_POST["frommonday"])) {
            $mon_from = "";
        }
        $mon_to = $_POST['tomonday'];
        if (empty($_POST["tomonday"])) {
            $mon_to = "";
        }
        $tue_from = $_POST['fromtuesday'];
        if (empty($_POST["fromtuesday"])) {
            $tue_from = "";
        }
        $tue_to = $_POST['totuesday'];
        if (empty($_POST["totuesday"])) {
            $tue_to = "";
        }
        $wed_from = $_POST['fromwednesday'];
        if (empty($_POST["fromwednesday"])) {
            $wed_from = "";
        }
        $wed_to = $_POST['towednesday'];
        if (empty($_POST["towednesday"])) {
            $wed_to = "";
        }
        $thu_from = $_POST['fromthursday'];
        if (empty($_POST["fromthursday"])) {
            $thu_from = "";
        }
        $thu_to = $_POST['tothursday'];
        if (empty($_POST["tothursday"])) {
            $thu_to = "";
        }
        $fri_from = $_POST['fromfriday'];
        if (empty($_POST["fromfriday"])) {
            $fri_from = "";
        }
        $fri_to = $_POST['tofriday'];
        if (empty($_POST["tofriday"])) {
            $fri_to = "";
        }
        $sat_from = $_POST['fromsaturday'];
        if (empty($_POST["fromsaturday"])) {
            $sat_from = "";
        }
        $sat_to = $_POST['tosaturday'];
        if (empty($_POST["tosaturday"])) {
            $sat_to = "";
        }
        $sun_from = $_POST['fromsunday'];
        if (empty($_POST["fromsunday"])) {
            $sun_from = "";
        }
        $sun_to = $_POST['tosunday'];
        if (empty($_POST["tosunday"])) {
            $sun_to = "";
        }
        $shi_name = $_POST['jobname'];
        //$mon_to = $_POST['tomonday'];
        //$mon_from = "";
        //$mon_to = "";
        /*$tue_from = $_POST['fromtuesday'];
        $tue_to = $_POST['totuesday'];
        $wed_from = $_POST['fromwednesday'];
        $wed_to = $_POST['towednesday'];
        $jobname = $_POST['jobname'];*/
        //$start = "2023-10-11";
        //$st = $_GET['sr'];






        // $s = date("Y-d-m", strtotime($_POST['sr']));
        $s = $_POST['sr'];
        $pickc = $_POST['colorpicker'];

        $rep = 1;
        //echo ($s + " fafsas");
        echo date($s);

        echo ("<br>");

        $sqlt = "INSERT INTO create_shift (start_shift, rep_non, monday, mon_from, mon_to, tuesday, tue_from, tue_to, wednesday, wed_from, wed_to, thursday, thu_from, thu_to, friday, fri_from, fri_to, saturday, sat_from, sat_to, sunday, sun_from, sun_to, shift_name, color)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt10 = $mysqli_sh2->prepare($sqlt);
        $stmt10->bind_param(
            "siissississississississss",
            $s,
            $rep,
            $mon,
            $mon_from,
            $mon_to,
            $tue,
            $tue_from,
            $tue_to,
            $wed,
            $wed_from,
            $wed_to,
            $thu,
            $thu_from,
            $thu_to,
            $fri,
            $fri_from,
            $fri_to,
            $sat,
            $sat_from,
            $sat_to,
            $sun,
            $sun_from,
            $sun_to,
            $shi_name,
            $pickc
        );
        if ($stmt10->execute()) {
            header("Location: create_shift.php");
            exit;
        }
        $conn_sh2->close();
        $mysqli_sh2->close();





    }else{
        header("Location: create_shift.php");
        exit;
    }
}
?>