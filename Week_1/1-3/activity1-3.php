<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Activity 1-3</title>
  </head>
  <body>
    <h1>Yanely's Activity 1-3 (Loop)</h1>
    <h3>Original List of colors:</h3>
      
    <?php
    $colors = array(0 => "Teal", 1 => "Moonlight Yellow", 2 => "Baby Blue", 3 => "Sea Green", 4 => "Warm Red", 5 => "Gray", 6 => "Black", 7 => "Pink", 8 => "Maroon", 9 => "Gold");

    for ($i = 0; $i < count($colors); $i++) {
      echo "Color " . $i . " is " . $colors[$i] . " <br />";
    }

    echo"<h3>Reverse List:</h3>";

    foreach (array_reverse($colors) as $key => $val) {
      echo "Color $key is $val <br />";
    }

    echo"<h3>Solid Colors Only (Odd Numbers):</h3>";

    for ($i = 0; $i < count($colors); $i++) {
        if ($i%2!==0) {
            echo "Color " . $i . " is " . $colors[$i] . " <br />";
        }
    }

    ?>

  </body>
</html>
