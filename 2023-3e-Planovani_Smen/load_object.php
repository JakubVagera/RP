      <?php

      /** Recursion function - main purpose of this function is to look for objects in the sub hierarchie*/
      function sub_object($searching, $dat2, $dat3, $counter,$nms)
      {
        for ($i = 0; $i < count($dat2); $i++) {
          if ($searching == $dat3[$i]) {
            ?>
            <p style="display:inline">
              <?php for ($q = 0; $q < $counter; $q++) {
                echo " -  ";
              } ?>
            </p>
            <input id="<?php echo $nms; ?>" type="radio" name="<?php echo $nms; ?>" value="<?php echo $dat2[$i]; ?>">
            <label for="<?php echo $nms; ?>">
              <?php echo $dat2[$i]; ?>
            </label>
            <br>
            <?php
            $co = $counter + 1;

            $sea = $dat2[$i];
            if (!$searching == null) {
              sub_object($sea, $dat2, $dat3, $co, $nms);
            } else {
              break;
            }
          }
        }

      }
       /**End of the printing process for object hierarchie */
      ?>