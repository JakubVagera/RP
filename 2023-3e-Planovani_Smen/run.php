<?php
$mysqli_sav = require __DIR__ . "/database.php";
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
$effectiveDate = date('Y-m-d', strtotime("+3 months", strtotime($effectiveDate)));
$month = substr("2024-01", 0, -3);
echo"<br>". $month ."<br>";
$date=date_create("now");
//$date = date('Y-m-d');
$date->modify("+13 months"); 
//date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        table,
    th,
    td {
      border: 1px solid black;
    }
    .aha{
      border-color: black;
      border-width: 4px;
      width: 100px;
      height: 100px;
    }
    .cont {
            margin-bottom: 25px;
            border: 1px solid;
            margin: auto;
            width: 80%;
            box-shadow: 5px 10px #888888;
        }
        .container {
  position: relative;
}
  </style>
</head>
<body>
  <button class="aha" onclick="mau()">
hellopashoi
  </button>
  <div class="cont">
    <div class="container">
<button style="font-size: 3px;position:absolute;top: 0px; right: 0px;">x</button>
  </div>
  </div>

  <table id="TVTVT">
        <tr>
          <th id="x0-0" name="x0-0" value="asdsa">asdfehdrdfhdffhnjg</th>
          <th id="x0-1">fehtdrfdfhdrfhsd</th>
          <th id="x0-2">jhikfasdjkh</th>
        </tr>
        <tr>
          <td id="x1-0">
          <div class="cont">
          <button style="font-size: 10px;position:absolute;top: 0px; right: 0px;">x</button>   
          <input type="time">
          </div>
          </td>
          <td id="x1-1">1-1</td>
          <td id="x1-2">1-2</td>
        </tr>
        <tr>
          <td id="x2-0">2-0</td>
          <td id="x2-1">2-1</td>
          <td id="x2-2">2-2</td>
        </tr>
      </table>
   <script>
    function mau(){
      <?php

      ?>
    }
   </script>


</body>
</html>