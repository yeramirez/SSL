<body>
  <h2>Congratulations your form has been processed successfully!</h2>
  <!-- <pre>
    <?php //print_r($_POST); ?>
  </pre> -->

  <?php


    if (isset($_POST['submit'])) {

      echo "The following registration details were submitted: <br /><br />";

      $school_email = $_POST['school_email'];
      if (!empty($school_email)) {
        if(preg_match('/@fullsail.edu/', $school_email)) {
          echo "<strong>School email entered:</strong> " . $school_email . "<br />";
        }else{
          echo "<strong>Not a match, school email entered:</strong> {$school_email}" . "<br />";
        }
      } else {
        $school_email = " default user (no input)";
        echo "School Email: {$school_email}" . "<br />";
      }

      $personal_email = $_POST['personal_email'];
      if (!empty($personal_email)) {
        if(!filter_var($personal_email, FILTER_VALIDATE_EMAIL) === false) {
          echo "<strong>Personal email entered: </strong>" . $personal_email;
        }else{
          echo "<strong>Not a match, personal email entered:</strong> {$personal_email}";
        }
      } else {
        $personal_email = " default user (no input)";
        echo "Personal Email: {$personal_email}" . "<br />";
      }


      if (!empty($_POST['username'])) {
        $username = $_POST['username'];
        echo "<br />" . "<strong>Username: </strong> {$username}" . "<br />";
      } else {
        $username = " default user (no input)";
        echo "Username: {$username}" . "<br />";
      }

      if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $password = md5($_POST['password']);
        echo "<strong>Password:</strong> {$password}" . "<br />";
      } else {
        $password = " default user (no input)";
        echo "Password: {$password}" . "<br />";
      }
    } else {
        echo "No form details submitted: ";
        $school_email = " Not submitted";
        $personal_email = " Not submitted";
        $username = " default user (no input)";
        $password = " default user (no input)";
        echo "School Email: {$school_email}" . "<br />";
        echo "Personal Email: {$personal_email}" . "<br />";
        echo "Username: {$username}" . "<br />";
        echo "Password: {$password}";
      }
  ?>
</body>
