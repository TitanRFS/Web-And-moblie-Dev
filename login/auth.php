<?php
// Δημιουργία session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

  <?php
  if ($_POST['username'] === "student" && $_POST['password'] === "1234")
  {
    $_SESSION["username"] = "student";
    $_SESSION["email"] = "student@mooo.gr";
    
    echo "Check credentials <a href='sessions.php'>here</a>";
  }
  else 
  {
    echo "wrong credentials! Click <a href='login.html'>HERE</a> to retry";    
  }

  ?>

</body>
</html>
