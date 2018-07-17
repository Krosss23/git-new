<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <title>Завершение регистрации</title>
  <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
 </head>
 <body>

<?php


$un = $_POST['username'];
$ln = $_POST['lastname'];
$ps = $_POST['password'];
$em = $_POST['email'];
$age = $_POST['age'];
$gen = $_POST['gender'];
$co = $_POST['country'];
$zh = $_POST['zhanr'];
  

$login=$_POST['email'];
$password=$_POST['password'];
if ($_POST['out']=='Logout');
{
  unset($_SESSION['log']);
}
if (($login==$_POST['email'])&&($password==$_POST['password']))
{
  $_SESSION['log']=$_POST['email'];
  echo "Login succesful!<br>";
}
else
{
  echo "Login incorrect!<br>";
}
   if (isset($_SESSION['log']))
   {
    echo "<form action='index.php' method=POST>
  <input type=submit name=out value=Logout >
   </form>";
   echo "Hello ".$_SESSION['log']."!<br>";
   }
   else
   {
    echo "<form action='' method=POST>
    Login: <input name=email type=text><br>
    Password: <input name=password type=password ><br><br>
    <input type=submit value=login>
   </form>";
   }
   ?>





  

 </body>
</html>