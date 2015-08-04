<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Activity 1-1</title>
  </head>
  <body>
    <h1>Yanely's Activity 1-1 (Data Types & Variables)</h1>
    <?php
    $name = "Yanely";
    $age = 18;

    $person = array($name, $age);

    echo "Double Quotes: <br />";
    echo "My name is " . $name . " and age is " . $age . "<br />";

    echo "<br / >";

    echo "Single Quotes: <br />";
    echo 'My name is ' . $name . ' and age is ' . $age . '<br />';

    echo "<br />";

    echo "Index Integers: <br />";
    echo "My name is " . $person[0] . " and age is " . $person[1] . "<br />";

    echo "<br />";

    echo "Key-Value pairs: <br />";
    $person = array("Name" => $name, "Age" => $age);
    echo "My name is " . $person["Name"] . " and age is " . $person["Age"] . "<br />";

    echo "<br />";

    echo "Age set to null: <br />";
    $age = null;
    echo "My name is " . $name . " and age is " . $age . "<br />";

    echo "<br />";

    $age = 18;
    unset($name);
    echo "My name is " . $name . " and age is " . $age . "<br />";
    ?>
  </body>
</html>
