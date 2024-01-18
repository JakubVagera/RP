<?php
/**Some testing code */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mysqli2 = require __DIR__ . "/database.php";
    $sql2 = " SELECT * FROM list_of_tables ORDER BY id_tables ASC";
    //$result2 = $mysqli2->query($sql2);
    $result3 = $mysqli2->query($sql2);
    $mysqli2->close();
    while ($rows1 = mysqli_fetch_array($result3)) {
        ?>
        
        <input id="boxq" type="radio" name="boxq" value="<?php echo $rows1['table_name']; ?>" >
        <label for="boxq">
          <?php echo $rows1['real_table_name']; ?>
        </label>

        <br>
        <?php
    }
      hallo(10);
      $ress = mysqli_fetch_all($result3, MYSQLI_ASSOC);
      mysqli_free_result($result3);
      bat($ress);
    ?>
    <p>fsahfsjakhkhjsfahjfshjk</p>
    <?php
    function hallo($T)
    {
        
        ?>
        <input id="box" type="radio" name="box" value="<?php /*echo $rows1['table_name'];*/ ?>">
        <label for="box">
          <?php /*echo $rows1['real_table_name'];*/ ?>
          saf
        </label>

        <br>
        <?php
    }
    ?>

    <?php
    function bat($db){
        echo "<br>";
        echo $db;
        echo "<br>";
        $mysqli2 = require __DIR__ . "/database.php";
        $sql2 = " SELECT * FROM list_of_tables ORDER BY id_tables ASC";
        //$result2 = $mysqli2->query($sql2);
        $result3 = $mysqli2->query($sql2);
        $mysqli2->close();
        while ($rows1 = $result3->fetch_assoc()) {
            ?>
                    <input id="box" type="radio" name="box" value="<?php echo $rows1['table_name']; ?>">
        <label for="box">
          <?php echo $rows1['real_table_name']; ?>
        </label>

        <br>
        <?php
        }
    }
    ?>

</body>

</html>