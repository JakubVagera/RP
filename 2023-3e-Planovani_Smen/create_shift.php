<?php
/**Currently in development  */
$cons = "";
session_start();

if (isset($_SESSION["user2_id"])) {

  $mysqli = require __DIR__ . "/database.php";

  $sql = "SELECT * FROM user2
            WHERE id = {$_SESSION["user2_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
}

$mysqli1 = require __DIR__ . "/database.php";
$sql1 = " SELECT * FROM user2 ORDER BY id DESC ";
$result1 = $mysqli1->query($sql1);
$mysqli1->close();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="css/main_page.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .cont {
      margin-bottom: 25px;
      border: 1px solid;
      margin: auto;
      width: 80%;
      padding: 10px;
      box-shadow: 5px 10px #888888;
    }

    .head {
      margin: auto;
      width: 80%;
      padding: 10px;
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  

<nav>
      <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="admin_main_page.php">Home :
            <?= $cons ?>
            <?= htmlspecialchars($user["firstname"]) ?>
            <?= htmlspecialchars($user["middlename"]) ?>
            <?= htmlspecialchars($user["lastname"]) ?>
          </a></div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">Home page</span>
            <i class='bx bx-x'></i>
          </div>
          <ul class="links">
            <li>
              <a href="#">EMPLOYEES</a>
              <i class='bx bxs-chevron-down js-emarrow arrow '></i>
              <ul class="em-sub-menu sub-menu">
                <li><a href="signup.php">ADD TO SYSTEM</a></li>
                <li><a href="#">LIST</a></li>
                <li><a href="#">CHANGE DATA</a></li>
              </ul>
            </li>
            <li>
              <a href="#">DATABASE</a>
              <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="create_object.php">CREATE OBJECT</a></li>
                <li><a href="create_shift.php">CREATE SHIFT</a></li>
                <li><a href="#">CURRENT SCHEDULE</a></li>
                <li class="more">
                  <span><a href="#">More</a>
                    <i class='bx bxs-chevron-right arrow more-arrow'></i>
                  </span>
                  <ul class="more-sub-menu sub-menu">
                    <li><a href="#"></a></li>
                    <li><a href="#">Pre-loader</a></li>
                    <li><a href="#">Glassmorphism</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">HISTORY</a>
              <i class='bx bxs-chevron-down js-arrow arrow '></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="#">Dynamic Clock</a></li>
                <li><a href="#">Form Validation</a></li>
                <li><a href="#">Card Slider</a></li>
                <li><a href="#">Complete Website</a></li>
              </ul>
            </li>
            <li><a href="#">STATISTICS</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
          </ul>
        </div>
        <div class="search-box">
          <i class='bx bx-search'></i>
          <div class="input-box">
            <input type="text" placeholder="Search...">
          </div>
        </div>
      </div>
    </nav>
    <script src="js/main_page.js"></script>
    <br>
    <br>
    <br>
   

<div class="head">
      <h1>Create new shift - test</h1>
    </div>

<form id="main_f" method="post" action="load_shift.php" novalidate>

<?php if (isset($user)): ?>


  <div class="cont">
  <h2>Create permanet shift: </h2>
        <label for="sr">When the first schift should start:</label>
        <input type="date" id="sr" name="sr" value="<?php echo ('Y-m-d'); ?>">
        <br>
        <label for="jobname" style="display:inline">Name of the job position:</label>
        <input type="text" name="jobname" id="jobname" style="display:inline">
        <br>
        <label for="repeat">After how many days the shift should repeat:</label>
        <input type="number" id="repeat" name="repeat" min="0" size="2">
        <br>
        <label>In which days the schift should be:</label>
        <br>
        <h3>General setting</h3>

        <input type="checkbox" id="everyday" name="radio" style="display:inline">
        <label for="everyday" style="display:inline"> Everyday</label>
        <input type="checkbox" id="everyworkday" name="radio" style="display:inline">
        <label for="everyworkday" style="display:inline"> Every work day</label>
        <input type="checkbox" id="weekend" name="radio" style="display:inline">
        <label for="weekend" style="display:inline"> Every weekend</label>
        <br>
        <label for="from" style="display:inline">From </label>
        <input type="time" id="from" name="from" style="display:inline" />
        <label for="to" style="display:inline">To </label>
        <input type="time" id="to" name="to" style="display:inline" />

        <button id="paste" onclick="myFunction()">Paste</button>
        <br>

        <br>
        <h3>Specific setting</h3>
        <input class="select" type="checkbox" id="monday" name="monday" style="display:inline" value="1">
        <label for="monday" style="display:inline"> Monday - </label>
        <label for="frommonday" style="display:inline">From </label>
        <input  id="frommonday" name="frommonday" type="time" style="display:inline" />
        <label for="tomonday" style="display:inline">To </label>
        <input type="time" id="tomonday" name="tomonday" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="tuesday" name="tuesday" style="display:inline" value="1">
        <label for="tuesday" style="display:inline"> Tuesday - </label>
        <label for="fromtuesday" style="display:inline">From </label>
        <input type="time" id="fromtuesday" name="fromtuesday" style="display:inline" />
        <label for="totuesday" style="display:inline">To </label>
        <input type="time" id="totuesday" name="totuesday" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="wednesday" name="wednesday" style="display:inline" value="1">
        <label for="wednesday" style="display:inline"> Wednesday - </label>
        <label for="fromwednesday" style="display:inline">From </label>
        <input type="time" id="fromwednesday" name="fromwednesday" style="display:inline" />
        <label for="towednesday" style="display:inline">To </label>
        <input type="time" id="towednesday" name="towednesday" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="thursday" name="thursday" style="display:inline" value="1">
        <label for="thursday" style="display:inline"> Thursday - </label>
        <label for="fromthursday" style="display:inline">From </label>
        <input type="time" id="fromthursday" name="fromthursday" min="00:00" max="00:00" style="display:inline" />
        <label for="tothursday" style="display:inline">To </label>
        <input type="time" id="tothursday" name="tothursday" min="00:00" max="00:00" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="friday" name="friday" style="display:inline" value="1">
        <label for="Friday" style="display:inline"> Friday - </label>
        <label for="fromfriday" style="display:inline">From </label>
        <input type="time" id="fromfriday" name="fromfriday" min="00:00" max="00:00" style="display:inline" />
        <label for="tofriday" style="display:inline">To </label>
        <input type="time" id="tofriday" name="tofriday" min="00:00" max="00:00" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="saturday" name="saturday" style="display:inline" value="1">
        <label for="saturday" style="display:inline"> Saturday - </label>
        <label for="fromsaturday" style="display:inline">From </label>
        <input type="time" id="fromsaturday" name="fromsaturday" min="00:00" max="00:00" style="display:inline" />
        <label for="tosaturday" style="display:inline">To </label>
        <input type="time" id="tosaturday" name="tosaturday" min="00:00" max="00:00" style="display:inline" />
        <br>


        <input class="select" type="checkbox" id="sunday" name="sunday" style="display:inline" value="1">
        <label for="sunday" style="display:inline"> Sunday - </label>
        <label for="fromsunday" style="display:inline">From </label>
        <input class="select" type="time" id="fromsunday" name="fromsunday" min="00:00" max="00:00"
          style="display:inline" />
        <label style="display:inline">To </label>
        <input type="time" id="tosunday" name="tosunday" min="00:00" max="00:00" style="display:inline" />

        <br>
        <br>
        <label>In which object the shift should be:</label>
        <br>
        <?php
        $names = $_GET['day'];
foreach ($names as $color){ 
    echo $color."<br />";
}
?>




        <?php
        /**Start of the printing process for object hierarchie */
        $mysqli2 = require __DIR__ . "/database.php";
        $sql2 = " SELECT * FROM list_of_objects ORDER BY id_object ASC";
        $result3 = $mysqli2->query($sql2);
        $mysqli2->close();
        $data_name = array();


        $mysqli2 = require __DIR__ . "/database.php";
        require __DIR__ . '/load_object.php';


        $conn2 = new mysqli($host, $username, $password, $dbname);
        $fetch = mysqli_query($conn2, "SELECT * FROM list_of_objects");
        $data2 = array();
        $data3 = array();


        if (mysqli_num_rows($fetch) > 0) {
          /**Sorting data alphabetically */
          while ($rows_dat = mysqli_fetch_assoc($fetch)) {
            $data2[] = $rows_dat['object_name'];
            $data3[] = $rows_dat['superior_object_name'];
          }
          array_multisort($data2, $data3);
        }
        $search;
        $nm = "boxs";
        /**This part looks for row with any object without superior object (highest standing in hierarchie)  */
        for ($x = 0; $x < count($data2); $x++) {
          if ($data3[$x] == null) {

            $search = $data2[$x] . "";
            $count = 1;
            ?>
            <input id="boxs" type="radio" name="boxs" value="<?php echo $data2[$x]; ?>">
            <label for="boxs">
              <?php echo $data2[$x]; ?>
            </label>
            <br>
            <?php
            /**This part calls the function in order to check if this object is superior to some other object*/
            //require __DIR__ . '/load_object.php';
            sub_object($search, $data2, $data3, $count, $nm);
          }

        }
        ?>
        <br>
        <label for="colorpicker">Color Picker:</label>
   <input type="color" id="colorpicker" name="colorpicker" value="#ffffff">
   <br>
<button id="v" name="v" type="submit" onclick="cr()">Save</button>
<!--<button type="submit" onclick="cr()">Save</button>-->








  </div>



      <?php else: ?>
  <?php endif; ?>
</body>
<script>
    document.getElementById('sr').valueAsDate = new Date();
    document.cookie = "myval= " + document.getElementById('sr').value;

    </script>
    <script>
    function cr(){
     var s = document.getElementById('sr').value;
     <?php 
     faasr();
     ?>
     //alert(s);

    }
    <?php
function faasr(){
  //$$SFE = 
  //include_once __DIR__ .'/lt.php';



/*23  if (isset($_POST['v'])){
$mysqli_sh2 = require __DIR__ . "/database.php";


$conn_sh2 = new mysqli($host, $username, $password, $dbname);
$conn_sh2->close();
$tr = 1;
$d = "2023-10-11";

$t = "";




if ($_POST['ch'] == '1') {
    $mon = 1;
  
  } else {
    $mon = 0;
  }
  if ($_POST['tuesday1'] == '1') {
    $tue = 1;
  
  } else {
    $tue = 0;
  }
  if ($_POST['wednesday1'] == '1') {
    $wed = 1;
  
  } else {
    $wed = 0;
  }
  $mon_from = "";
  $mon_to = "";
  $mon_from = $_POST['tim'];
  if (empty($_POST["tim"])) {
    $mon_from = "";
  }
  //$mon_to = $_POST['tomonday'];
  //$mon_from = "";
  $mon_to = "";
  /*$tue_from = $_POST['fromtuesday'];
  $tue_to = $_POST['totuesday'];
  $wed_from = $_POST['fromwednesday'];
  $wed_to = $_POST['towednesday'];
  $jobname = $_POST['jobname'];*/
  //$start = "2023-10-11";
  //$st = $_GET['sr'];






 // $s = date("Y-d-m", strtotime($_POST['sr']));
 /*23 $s = $_POST['sr'];

  $rep = 1;
  //echo ($s + " fafsas");
  echo date($s);
  
  echo ("<br>");

$sqlt = "INSERT INTO create_shift (start_shift, rep_non, monday, mon_from, mon_to, tuesday, tue_from, tue_to, wednesday, wed_from, wed_to)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt10 = $mysqli_sh2->prepare($sqlt);
$stmt10->bind_param(
  "siissississ",
  $s,
  $rep,
  $mon,
  $mon_from,
  $mon_to,
  $tr,
  $t,
  $t,
  $tr,
  $t,
  $t
);
if($stmt10->execute()){
  header("Location: ct.php");
  exit;
}
$conn_sh2->close();
$mysqli_sh2->close();





  }*/
}
?>

</script>
<script>
  document.getElementById('everyday').onclick = function () {
    //var checkboxes = document.getElementsByName('day[]');
    //var checkboxes2 = document.getElementsByName('weekendday[]');
    var mo =document.getElementById('monday');
    var tu =document.getElementById('tuesday');
    var we =document.getElementById('wednesday');
    var th =document.getElementById('thursday');
    var fr =document.getElementById('friday');
    var sa =document.getElementById('saturday');
    var su =document.getElementById('sunday');
    if(mo.checked == true){
      mo.checked = false;
    }else{
    mo.checked = true;
    }
    if(tu.checked == true){
      tu.checked = false;
    }else{
    tu.checked = true;
    }
    if(we.checked == true){
      we.checked = false;
    }else{
    we.checked = true;
    }
    if(th.checked == true){
      th.checked = false;
    }else{
    th.checked = true;
    }
    if(fr.checked == true){
      fr.checked = false;
    }else{
    fr.checked = true;
    }
    if(sa.checked == true){
      sa.checked = false;
    }else{
    sa.checked = true;
    }
    if(su.checked == true){
      su.checked = false;
    }else{
    su.checked = true;
    }
    /*for (var checkbox of checkboxes) {
      checkbox.checked = this.checked;
    }*/
    /*for (var checkbox of checkboxes2) {
      checkbox.checked = this.checked;
    }*/
  }
  document.getElementById('everyworkday').onclick = function () {
    /*var checkboxes = document.getElementsByName('day[]');
    for (var checkbox of checkboxes) {
      checkbox.checked = this.checked;
    }*/
    var mo =document.getElementById('monday');
    var tu =document.getElementById('tuesday');
    var we =document.getElementById('wednesday');
    var th =document.getElementById('thursday');
    var fr =document.getElementById('friday');
    if(mo.checked == true){
      mo.checked = false;
    }else{
    mo.checked = true;
    }
    if(tu.checked == true){
      tu.checked = false;
    }else{
    tu.checked = true;
    }
    if(we.checked == true){
      we.checked = false;
    }else{
    we.checked = true;
    }
    if(th.checked == true){
      th.checked = false;
    }else{
    th.checked = true;
    }
    if(fr.checked == true){
      fr.checked = false;
    }else{
    fr.checked = true;
    }

  }
  document.getElementById('weekend').onclick = function () {
    /*var checkboxes = document.getElementsByName('weekendday[]');
    for (var checkbox of checkboxes) {
      checkbox.checked = this.checked;
    }*/

    var sa =document.getElementById('saturday');
    var su =document.getElementById('sunday');

    if(sa.checked == true){
      sa.checked = false;
    }else{
    sa.checked = true;
    }
    if(su.checked == true){
      su.checked = false;
    }else{
    su.checked = true;
    }
  }
  function myFunction() {//w ww  . jav a 2 s  .  c  o m
    if (document.getElementById("monday").checked) {
      document.getElementById("frommonday").value = document.getElementById("from").value;
      document.getElementById("tomonday").value = document.getElementById("to").value;
    }
    if (document.getElementById("tuesday").checked) {
      document.getElementById("fromtuesday").value = document.getElementById("from").value;
      document.getElementById("totuesday").value = document.getElementById("to").value;
    }
    if (document.getElementById("wednesday").checked) {
      document.getElementById("fromwednesday").value = document.getElementById("from").value;
      document.getElementById("towednesday").value = document.getElementById("to").value;
    }
    if (document.getElementById("thursday").checked) {
      document.getElementById("fromthursday").value = document.getElementById("from").value;
      document.getElementById("tothursday").value = document.getElementById("to").value;
    }
    if (document.getElementById("friday").checked) {
      document.getElementById("fromfriday").value = document.getElementById("from").value;
      document.getElementById("tofriday").value = document.getElementById("to").value;
    }
    if (document.getElementById("saturday").checked) {
      document.getElementById("fromsaturday").value = document.getElementById("from").value;
      document.getElementById("tosaturday").value = document.getElementById("to").value;
    }
    if (document.getElementById("sunday").checked) {
      document.getElementById("fromsunday").value = document.getElementById("from").value;
      document.getElementById("tosunday").value = document.getElementById("to").value;
    }
  }


</script>

<script>
  let form = document.querySelector('#main_f');
  /*form.addEventListener('submit', function () {
    console.log('Someone said hi!');
  });*/





  form.addEventListener('submit', function (event) {

    // Ignore the #toggle-something button
    if (event.submitter.matches('#paste')) {
      event.preventDefault();
    }

    console.log('Someone said hi!');

  });

</script>
</form>
</html>



