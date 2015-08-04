<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Activity 1-2</title>
  </head>
  <body>
    <h1>Yanely's Activity 1-2 (Functions, Conditionals, Output)</h1>
    <?php

    $grade = array(94, 54, 89.9, 60.01, 102.1);

    for ($i = 0; $i < count($grade); $i++) {
      if ($grade[$i] >= 100) {
        echo "Your grade is A+ <br/>";
      } elseif ($grade[$i] >= 90) {
        echo "Your grade is A <br/>";
      } elseif ($grade[$i] >= 80) {
        echo "Your grade is B <br/>";
      } elseif ($grade[$i] >= 70) {
        echo "Your grade is C<br/>";
      } elseif ($grade[$i] >= 60) {
        echo "Your grade is a D<br/>";
      } else{
        echo "Your grade is a F<br/>";
      }
    };
    ?>
  </body>
</html>
