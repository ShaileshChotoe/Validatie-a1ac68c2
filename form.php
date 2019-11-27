<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" action="form.php" method="post">
      <input type="text" name="email" value="">
      <input type="submit" name="submit" value="verstuur">
    </form>
  </body>
</html>

<?php


if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  if (filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    echo "<h1>Geldige Email!<h1>";
  }
  else
  {
    echo "<h1>Geen geldige Email :(<h1>";
  }
}


?>
