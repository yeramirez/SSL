<body>
  <h2>Yanely's Form!</h2>
  <!-- <form action="form_processing.php" method="post"> -->
  <form action="password_encryption_lab.php" method="post" enctype="multipart/form-data">
    School Email: <input type="text" name="school_email" value="" required /><br />
    Personal Email: <input type="text" name="personal_email" value="" required /><br />
    Username: <input type="text" name="username" value="" required /><br />
    Password: <input type="password" name="password" value="" required /><br />
      <br />

    <input type="file" name="file_upload" />
    <input type="submit" name="submit" value="Upload" />
    
  </form>
</body>
