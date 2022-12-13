<?php
// Δημιουργία session
session_start();

if(!isset($_SESSION['username']))
{
  header('Location: login.html');
}
?>

<!DOCTYPE html>
<html>
<body>

  <?php
    echo "USERNAME:" . $_SESSION["username"];
    echo "<br/>EMAIL:" . $_SESSION["email"];
  ?>
  <a href="logout.php"><input type="submit" name="logout" value="Logout"></a>
  
</body>
</html>
