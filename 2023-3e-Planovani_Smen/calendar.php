<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }

    /* td:nth-child(even) {
  background-color: #D6EEEE;
}*/
    /*
    .hoverTable {
      width: 100%;
      border-collapse: collapse;
    }

    .hoverTable td {
      padding: 7px;
      border: #4e95f4 1px solid;
    }>

    /* Define the default color for all the table rows */
    /*.hoverTable tr {
      background: #b8d1f3;
    }*/

    /* Define the hover highlight color for the table row */
    /* tr:hover {
      background-color: #e8e8e8;
    }*/
    .container {
      position: relative;
    }

    .topright {
      position: absolute;
      top: 0px;
      right: 0px;
      font-size: 3px;
    }



    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



  </style>
</head>

<body>
  <?php
  $today = date("Y-m-d");
  ?>
  <input type="hidden" id="kpk" name="kpk" value="2024-01">
  <div style="margin: auto;width: 60%;">
    <input type="hidden" id="help" name="help">
    <label id="hhia" name="hhia">asdasd</label>
    <input type="hidden" id="hideYM">
    <form id="form1" name="form1" method="post">

      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>

      <div class="calendar">
        <table>
          <tr>
          </tr>
          <table class="days" style="border-collapse:collapse;">
            <div class="hoverTable">
              <tr>
              </tr>
            </div>
          </table>
        </table>

      </div>


      <div class="form-group">
        <label for="email">Student Name:</label>
        <input type="text" name="sname" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="pwd">Student email:</label>
        <input type="text" name="email" class="form-control" id="email">
      </div>
      <input type="button" name="send" class="btn btn-primary" value="add data" id="butsend">
      <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">



    </form>



    <table id="TVTVT">
      <tr>
        <th id="x0-0" name="x0-0" value="asdsa">asd</th>
        <th id="x0-1">0-1</th>
        <th id="x0-2">0-2</th>
      </tr>
      <tr>
        <td id="x1-0">1-0</td>
        <td id="x1-1">1-1</td>
        <td id="x1-2">1-2</td>
      </tr>
      <tr>
        <td id="x2-0">2-0</td>
        <td id="x2-1">2-1</td>
        <td id="x2-2">2-2</td>
      </tr>
    </table>
    <button onClick="vl()"></button>
    <input id="timssa" type="time" value="00:00">
    <table id="table1" name="table1" class="table table-bordered">
      <tbody>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>email</th>
          <th>Action</th>
        <tr>
      </tbody>
    </table>
  </div>





  <h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Search for employee..</p>
    <input type="text" id="live_search" autocomplete="off" placeholder="Search...">
    <br>
    <button>Hello</button>
    <div id="searchresult"></div>
  </div>

</div>


<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
<br>
<br>
<br>


<script>

  $(document).ready(function(){

     $("#live_search").keyup(function(){

        var input = $(this).val();
        //alert(input);
        if(input != ""){
           $.ajax({
            url:"livesearch.php",
            method: "POST",
            data:{input : input},
           });
        }
     });
  });
/*function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}*/
</script>



  <script>
    $(document).ready(function () {
      var id = 1;
      /*Assigning id and class for tr and td tags for separation.*/
      $("#butsend").click(function () {
        var newid = id++;
        $("#table1").append('<tr valign="top" id="' + newid + '">\n\
    <td width="100px" >' + newid + '</td>\n\
    <td width="100px" class="name'+ newid + '">' + $("#name").val() + '</td>\n\
    <td width="100px" class="email'+ newid + '">' + $("#email").val() + '</td>\n\
    <td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
      });
      $("#table1").on('click', '.remCF', function () {
        $(this).parent().parent().remove();
      });
      /*crating new click event for save button*/
      $("#butsave").click(function () {
        var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
        var from = new Array();
        var to = new Array();
        var date = new Array();
        var name = new Array();
        var id_shift = new Array();
        var id_shift_delete = new Array();
        for (var x = 1; x <= 100; x++) {
          for (var i = 1; i <= 31; i++) {
            /*name.push($("#"+i+" .name"+i).html()); /*pushing all the names listed in the table*/
            //email.push($("#"+i+" .email"+i).html()); /*pushing all the emails listed in the table*/

            if (i < 10) {
              var q = "0" + i;
            } else {
              var q = i;
            }
            if (x < 100) {
              var p = "0" + "0" + x;
            } else if (x < 10) {
              var p = "0" + x;
            }
            var kla = "tf";
            var kla2 = "-";
            let ml = kla + q + kla2 + p;
            var myElem = document.getElementById(ml);
            if (myElem != null) {

              to.push($("#tt" + q + "-" + p).val());
              from.push($("#tf" + q + "-" + p).val());
              id_shift.push($("#i00-" + p).val());
              var ids = $("#i00-" + p).val();
              if (id_shift_delete.includes(ids)) {
              } else {
                id_shift_delete.push(ids);
              }
              var ym = $("#current_load_date").val();
              let h = ym + "-" + q;
              date.push(h);
            }

          }
        }
        var fromTime = JSON.stringify(from);
        var toTime = JSON.stringify(to);
        var idArr = JSON.stringify(id_shift);
        var dateArr = JSON.stringify(date);
        var deleteArr = JSON.stringify(id_shift_delete);
        var year_month = $("#current_load_date").val();
        $.ajax({
          url: "insert-ajax.php",
          type: "post",
          data: { from: fromTime, to: toTime, dateym: year_month, id_shift: idArr, date: dateArr, id_delete: deleteArr },
          success: function (data) {
            alert(data); /* alerts the response from php.*/
          }
        });
      });
    });
  </script>





<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/*btn.onclick = function() {
  modal.style.display = "block";
}*/

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
 function Open_name(clicked_id){
  var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById(clicked_id);

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
modal.style.display = "block";
  //alert("hjkfashjk");
 }
</script>



  <script>
    var passedID = "";
    const daysTag = document.querySelector(".days"),
      currentDate = document.querySelector(".current-date"),
      prevNextIcon = document.querySelectorAll(".icons span");

    let items = [
      [0, 1],
      [4, 8],
      [6, 5],
      [6, 6],
      [8, 28],
      [9, 28],
      [10, 17],
      [11, 24],
      [11, 25],
      [11, 26]
    ];
    // getting new date, current year and month
    let date = new Date(),
      currYear = date.getFullYear(),
      currMonth = date.getMonth();
    <?php

    $currentr = 0;


    ?>
    // storing full name of all months in array
    const months = ["January", "February", "March", "April", "May", "June", "July",
      "August", "September", "October", "November", "December"];
    const months2 = [".1", ".2", ".3", ".4", ".5", ".6", ".7",
      ".8", ".9", ".10", ".11", ".12"];
    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var first = 0;




    const renderCalendar = () => {

      let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
      let liTag = "";


      const fr = new Date(currYear, currMonth, 0);
      const f = new Date(currYear, currMonth, 0);
      const kl = new Date(currYear, currMonth, 0);
      const d = new Date();
      const re = new Date();


      let currMonthNull = "";
      if (currMonth < 9) {
        currMonthNull = "0" + (currMonth + 1);
      } else {
        currMonthNull = currMonth + 1;
      }
      let tet = "<input type='hidden' id='current_load_date' name='current_load_date' value='" + currYear + "-" + (currMonthNull) + "'>";
      liTag += `${tet}`;


      for (let i = 1; i <= lastDateofMonth; i++) {
        if (i == 1) {
          <?php
          $jk = $_POST['current_load_date'];
          $mysqli_cal = require __DIR__ . "/database.php";
          $sql_cal = " SELECT * FROM create_shift ORDER BY id_shift ASC";
          $cols[] = array();
          $color[] = array();
          $colordark[] = array();
          $idc[] = array();
          $wdw[][] = array();
          $tish[][] = array();
          $result_cal = $mysqli_cal->query($sql_cal);
          $r = 0;
          while ($rows_cal = $result_cal->fetch_assoc()) {
            $idc[$r] = $rows_cal['id_shift'];
            $cols[$r] = $rows_cal['shift_name'];
            $color[$r] = $rows_cal['color'];
            $wdw[0][$r] = $rows_cal['monday'];
            $wdw[1][$r] = $rows_cal['tuesday'];
            $wdw[2][$r] = $rows_cal['wednesday'];
            $wdw[3][$r] = $rows_cal['thursday'];
            $wdw[4][$r] = $rows_cal['friday'];
            $wdw[5][$r] = $rows_cal['saturday'];
            $wdw[6][$r] = $rows_cal['sunday'];


            $red = substr($color[$r], 1, 2);
            $green = substr($color[$r], 3, 2);
            $blue = substr($color[$r], 5, 2);
            $red = base_convert($red, 16, 10);
            $green = base_convert($green, 16, 10);
            $blue = base_convert($blue, 16, 10);
            $red = round($red - $red / 100 * 30);
            $green = round($green - $green / 100 * 30);
            $blue = round($blue - $blue / 100 * 30);
            $red = base_convert($red, 10, 16);
            $green = base_convert($green, 10, 16);
            $blue = base_convert($blue, 10, 16);
            if (strlen($red) < 2) {
              $red = "0" . $red;
            }
            if (strlen($green) < 2) {
              $green = "0" . $green;
            }
            if (strlen($blue) < 2) {
              $blue = "0" . $blue;
            }
            $colordark[$r] = "#" . $red . $green . $blue;
            $tish[0][$r] = $rows_cal['mon_from'];
            $tish[1][$r] = $rows_cal['mon_to'];
            $tish[2][$r] = $rows_cal['tue_from'];
            $tish[3][$r] = $rows_cal['tue_to'];
            $tish[4][$r] = $rows_cal['wed_from'];
            $tish[5][$r] = $rows_cal['wed_to'];
            $tish[6][$r] = $rows_cal['thu_from'];
            $tish[7][$r] = $rows_cal['thu_to'];
            $tish[8][$r] = $rows_cal['fri_from'];
            $tish[9][$r] = $rows_cal['fri_to'];
            $tish[10][$r] = $rows_cal['sat_from'];
            $tish[11][$r] = $rows_cal['sat_to'];
            $tish[12][$r] = $rows_cal['sun_from'];
            $tish[13][$r] = $rows_cal['sun_to'];


            $r++;

          }

          $sa[] = array();
          $saved_data[][] = array();

          if ($currentr == 0) {

            $ch = "2024-01";
            //$ch = 
          } else {
            $ch = "2024-02";
          }
          $currentr = 1;
          $y = substr($ch, 0, -3);
          $m = substr($ch, -2);
          $mysqli_sav = require __DIR__ . "/database.php";
          $conout = 0;
          $con = new mysqli($host, $username, $password, $dbname);
          if ($conout == 0) {



            for ($x = 0; $x < count($idc); $x++) {
              $sql_check = " SELECT * FROM shift_check WHERE id_shift='$idc[$x]' AND year_shift='$y' AND month_shift ='$m' ";
              $check_existance = mysqli_query($con, $sql_check);

              if (mysqli_num_rows($check_existance) == 0) {

                $saved_data[$x][0] = "0";
                $sa[$x] = 0;

              } else {

                $sa[$x] = "1";
                $saved_data[$x][0] = "1";
                for ($i = 1; $i < 32; $i++) {
                  if ($i < 10) {
                    $dt = "0" . $i;
                  } else {
                    $dt = $i;
                  }

                  $d = $ch . "-" . $dt;
                  $sql_get = " SELECT * FROM saved_shift_data WHERE id_of_shift='$idc[$x]' AND saved_date='$d' ";
                  $check_get = mysqli_query($con, $sql_get);
                  if (mysqli_num_rows($check_get) == 0) {
                    $saved_data[$x][$i] = "empty";
                  } else {
                    $result_get = $mysqli_sav->query($sql_get);
                    while ($rows_get = $result_get->fetch_assoc()) {
                      $get_from = $rows_get['saved_from'];
                      $get_to = $rows_get['saved_to'];
                    }
                    $saved_data[$x][$i] = $get_from . "//" . $get_to;
                  }
                }
              }
            }
            $conout = 1;
          }
          global $number;
          $number = count($cols);
          $col_code = "<th id='00-000'>Date</th>";
          for ($i = 0; $i < $number; $i++) {
            $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);

            $lp = $i + 1;

            if ($lp < 10) {
              $lp = '0' . '0' . $lp;
            } else if ($lp < 100) {
              $lp = '0' . $lp;
            }


            $col_code = $col_code . "<th id='00-" . $lp . "' >" . $cols[$i] . "</th><input type='hidden' id='h00-" . $lp . "' value='" . $cols[$i] . "'><input type='hidden' id='i00-" . $lp . "' value='" . $idc[$i] . "'>";

          }

          $final_col_code = "<table><tr>" . $col_code . "</tr><table>";
          $mysqli_cal->close();
          $ass = "2024-01";
          $rt = 2024;
          ?>

          var passedID =
            <?php echo json_encode($idc); ?>;
          var passedY =
            <?php echo json_encode($y); ?>;
          var passedM =
            <?php echo json_encode($m); ?>;
          var passedCh =
            <?php echo json_encode($ass); ?>;
          var lena = "<?php echo "$number" ?>";
          var tsaas = "1";
          var idp = JSON.stringify(passedID);
          var Yp = JSON.parse(passedY);
          var Mp = JSON.stringify(passedM);
          var ChA = JSON.stringify(passedCh);
          var passedSavedata1 = Array();
          var tes;
          $.ajax({
            type: "POST",
            url: "get-ajax.php",
            dataType: "html",
            data: {
              id: idp, year: Yp, month: Mp, cha: ChA
            },
            success: function (data321) {
              //alert(data);
              //var tes = JSON.parse(data);
              //tes =  JSON.stringify(data);
              //aja(data);
              //document.getElementById("help").innerHTML = data321;
              //r//eturn data;
            }
          });



          let tet = "<?php echo "$final_col_code"; ?>"

          liTag += `${tet}`;

        } // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let find = 0;
        let isToday = i === date.getDate() && currMonth === new Date().getMonth()
          && currYear === new Date().getFullYear() ? "active" : "";
        /**source - https://stackoverflow.com/questions/966225/how-can-i-create-a-two-dimensional-array-in-javascript */
        fr.setDate(fr.getDate() + 1);
        f.setDate(f.getDate() + 1)
        let day = weekday[fr.getDay()];
        const m = fr.getMonth();
        var dayy = day;


        for (let e = 0; e < items.length; e++) {

          if (m == items[e][0] && i == items[e][1]) {
            find = 1;
            break;
          }

        }
        /** source https://www.geeksforgeeks.org/how-to-pass-a-php-array-to-a-javascript-function/ */
        var passedArray =
          <?php echo json_encode($wdw); ?>;
        var passedTime =
          <?php echo json_encode($tish); ?>;
        var passedColor =
          <?php echo json_encode($color); ?>;
        var passedColorDark =
          <?php echo json_encode($colordark); ?>;
        var passedSavedata =
          <?php echo json_encode($saved_data); ?>;
        var passedID =
          <?php echo json_encode($idc); ?>;
        var tas = 0;



        /** source https://www.geeksforgeeks.org/how-to-pass-variables-and-data-from-php-to-javascript/ */
        var sz = "<?php echo "$number" ?>";
        var numas = "<?php echo "$number" ?>";
        let dts = "";
        let cll = "background-color:#303030; color:white;";
        let ppp = '<div><td>';
        let ddd = '<div><td id="';
        let xxx = "-";
        let jjj = '">';
        let ccc = '" style="position:relative;padding: 20px;border: 1px solid black;background-color: ';
        let zzz = ';">';
        let qqq = "</td></div>";
        let ttt = "<button>+</button>";
        let mmm = '<center><button onClick="reply_click(this.id)" id="b';
        let nnn = '">+</button></center>';
        let bbb = "<br>";
        let ia = '<input type="time" value="';
        let ib = '">';
        let xcx = '<button align="right" style="position:absolute;top: 0px;right: 0px;font-size: 10px;" onClick="canceled(this.id)">X</button>';
        let b1 = '<button align="right" style="position:absolute;top: 0px;right: 0px;font-size: 8px;" onClick="canceled(this.id)" id="x';
        let b2 = '">X</button><br><input type="button" name="bn';
        let b3 = '" onClick="Open_name()" value="open">';
        let t1 = '<input type="time" id="tf';
        let t2 = '<input type="time" id="tt';
        let tv = '" value="';
        let s = "background-color:#585858;color:white;";
        let ii = "";

        if (day == "Monday") {
          s = "background-color:#303030; color:white;";
          for (let q = 0; q < sz; q++) {
            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[0][q] == 1) {
              let str1 = passedTime[0][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[1][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
            } else {
              let p = q + 1;
              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Tuesday") {
          s = "background-color:#585858; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[1][q] == 1) {
              let str1 = passedTime[2][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[3][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Wednesday") {
          s = "background-color:#303030; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[2][q] == 1) {
              let str1 = passedTime[4][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[5][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);

            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Thursday") {
          s = "background-color:#585858; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[3][q] == 1) {
              let str1 = passedTime[6][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[7][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Friday") {
          s = "background-color:#303030; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[4][q] == 1) {
              let str1 = passedTime[8][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[9][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);

            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {

                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Saturday") {
          s = "background-color:#585858; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[5][q] == 1) {
              let str1 = passedTime[10][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[11][q];
              str2 = str2.substring(0, str2.length - 3);
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColorDark[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        } else if (day == "Sunday") {
          s = "background-color:#303030; color:white;";
          for (let q = 0; q < sz; q++) {

            if (passedSavedata[q][0] == "1" && first == 0) {
              if (passedSavedata[q][i] == "empty") {
                let p = q + 1;
                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);

              } else {
                let str1 = passedSavedata[q][i];
                str1 = str1.substring(0, str1.length - 13);
                let str2 = passedSavedata[q][i];
                str2 = str2.substring(10, str2.length - 3);
                let p = q + 1;
                if (p < 10) {
                  p = "0" + "0" + p;
                } else if (p < 100) {
                  p = "0" + p;
                }

                if (i < 10) {
                  ii = "0" + i;
                } else {
                  ii = i;
                }
                dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
              }
            } else if (passedArray[6][q] == 1) {
              let str1 = passedTime[12][q];
              str1 = str1.substring(0, str1.length - 3);
              let str2 = passedTime[13][q];
              str2 = str2.substring(0, str2.length - 3); 
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;
              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, t1, ii, xxx, p, tv, str1, ib, bbb, t2, ii, xxx, p, tv, str2, ib, b1, ii, xxx, p, b2,ii, xxx, p,b3, qqq);
            } else {
              let p = q + 1;
              if (p < 10) {
                p = "0" + "0" + p;
              } else if (p < 100) {
                p = "0" + p;
              }

              if (i < 10) {
                ii = "0" + i;

              } else {
                ii = i;
              }
              dts = dts.concat(ddd, ii, xxx, p, ccc, passedColor[q], zzz, mmm, ii, xxx, p, nnn, qqq);
            }
          }
        }
        let nul = 0;
        if (find == 1) {


          liTag += `<tr><td id="${i}-000" class="${isToday}" style="${s}">${i} ${months2[currMonth]} <br> ${day} - Holiday </td>${dts}<tr>`;
          <?php echo $dsa = ""; ?>
        } else {
          <?php echo $dsa = ""; ?>
          liTag += `<tr><td id="${i}-000" class="${isToday}" style="${s}">${i} ${months2[currMonth]} <br> ${day}</td>${dts}<tr>`;


          <?php echo $dsa = ""; ?>
        }
        <?php echo $dsa = ""; ?>
        if (day == "Sunday" && day != 31) {
          let tet = "<?php echo "$final_col_code"; ?>";
          liTag += `${tet}`;
          daysTag.innerHTML = liTag;
        }

      }
      console.log("Hello");
      console.log(passedArray);
      <?php $dsa = ""; ?>
      currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
      daysTag.innerHTML = liTag;

    }



    renderCalendar();

    <?php $dsa = ""; ?>
    prevNextIcon.forEach(icon => { // getting prev and next icons
      icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        
        if (currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
          // creating a new date of current year & month and pass it as date value
          date = new Date(currYear, currMonth, new Date().getDate());
          currYear = date.getFullYear(); // updating current year with new date year
          currMonth = date.getMonth(); // updating current month with new date month
        } else {
          date = new Date(); // pass the current date as date value
        }
        first = 1;
        renderCalendar(); // calling renderCalendar function


        add_dat();


      });
    });
  </script>

  <script>
    <?php
    $mysqli_open = require __DIR__ . "/database.php";
    $sql_open = " SELECT * FROM create_shift ORDER BY id_shift ASC";
    $result_open = $mysqli_open->query($sql_open);
    $idb[] = array();
    $b = 0;
    while ($rows_open = $result_open->fetch_assoc()) {
      $idb[$b] = $rows_open['id_shift'];
      $b++;
    }
    $rr = $_GET['kpk'];
    $L = substr($rr, 0, -3);
    $P = substr($rr, -2);

    ?>
    function add_dat() {
      var newww = document.getElementById("current_load_date").value;
      var neww = newww.substring(0, 4);
      var news = newww.substring(5, 7);
      var passedIDB =
        <?php echo json_encode($idb); ?>;
      var passedYY =
        <?php echo json_encode($L); ?>;
      var passedMM =
        <?php echo json_encode($P); ?>;
      var passedChCH =
        <?php echo json_encode($rr); ?>;
      //var lena = "<?php //echo "$number" ?>";
      var tsaas = "1";
      var idb = JSON.stringify(passedIDB);
      var Ypb = JSON.parse(neww);
      var Mpb = JSON.stringify(news);
      var ChAb = JSON.stringify(passedChCH);
      var Cdsa = JSON.stringify(newww);
      var tess;
      $.ajax({
        type: "POST",
        url: "get-ajax.php",
        dataType: "html",
        data: {
          id: idb, year: Ypb, month: Mpb, cha: ChAb, nn: Cdsa
        },
        success: function (data3211) {
          document.getElementById("help").value = data3211;
          vl();
        }
      });
    }



  </script>
  <script>
    function vl() {
      tess = document.getElementById("help").textContent;
      var a1 = JSON.parse(document.getElementById("help").value);
      for (let x = 0; x < a1.length + 1; x++) {

        for (let i = 1; i < 32; i++) {
          if (a1[x][0] == "0") {

          } else {
            if (a1[x][i] == "empty") {
              if (x < 10) {
                var mr = "0" + "0" + (x + 1);
              } else if (x < 100) {
                var mr = "0" + (x + 1);
              } else {
                var mr = (x + 1);
              }
              if (i < 10) {
                var mrs = "0" + i;
              } else {
                var mrs = i;
              }
              let fa = mrs + "-" + mr;
              let end = "";
              let chq = document.getElementById(fa);
              if (chq !== null) {
              let can = "";
              let mmm = '<center><button onClick="reply_click(this.id)" id="b';
              let nnn = '">V</button></center>';
              can = mmm + fa + nnn;
              chq.innerHTML = can;
              }
            } else {
              if (x < 10) {
                var mr = "0" + "0" + (x + 1);
              } else if (x < 100) {
                var mr = "0" + (x + 1);
              } else {
                var mr = (x + 1);
              }
              if (i < 10) {
                var mrs = "0" + i;
              } else {
                var mrs = i;
              }
              let fa = mrs + "-" + mr;
              let end = " ";
              let chp = document.getElementById(fa);
              if (chp !== null) {
              let final = "";
              let btn1 = '<button align="right" style="position:absolute;top: 0px;right: 0px;font-size: 8px;" onClick="canceled(this.id)" id="x';
              let btn2 = '">V</button>';
              let val = a1[x][i];
              let val1 = val.substring(0, 5);
              let val2 = val.substring(10, 15);
              let brr = "<br>";
              let tm1 = '<input type="time" id="tf';
              let tm2 = '<input type="time" id="tt';
              let tmv = '" value="';
              let tmc = '">';
              let asz = '<input type="time" id="tp01-001" value="00:00">';
              final = tm1 + fa + tmv + val1 + tmc + brr + tm2 + fa + tmv + val2 + tmc + btn1 + fa + btn2;
              chp.innerHTML = "";
              chp.innerHTML = final;
            }
            }
          }
        }
      }
    }
  </script>

  <script>
    function FFF() {
      let r = 10;
      let nulls = 0;
      if (r < 10) {
        r = "0" + r;
      }
      labelElement.innerHTML =
        r;
    }


    function prependZero(number) {
      if (number < 9)
        return "0" + number;
      else
        return number;
    }


    function reply_click(clicked_id) {
      let result123 = clicked_id.substring(1, 7);
      let cha = document.getElementById(result123);
      let final = "";
      let btn1 = '<button align="right" style="position:absolute;top: 0px;right: 0px;font-size: 8px;" onClick="canceled(this.id)" id="x';
      let btn2 = '">x</button>'
      let val = "00:00";
      let brr = "<br>";
      let tm1 = '<input type="time" id="tf';
      let tm2 = '<input type="time" id="tt';
      let tmv = '" value="';
      let tmc = '">';
      final = tm1 + result123 + tmv + val + tmc + brr + tm2 + result123 + tmv + val + tmc + btn1 + result123 + btn2;
      cha.innerHTML = final;
    }
    function canceled(clicked_id) {
      let result123 = clicked_id.substring(1, 7);
      let cha = document.getElementById(result123);
      let can = "";
      let mmm = '<center><button onClick="reply_click(this.id)" id="b';
      let nnn = '">+</button></center>';
      can = mmm + result123 + nnn;
      cha.innerHTML = can;
    }
  </script>












</body>

</html>