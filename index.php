<?
session_start();
if (isset($_GET['login'])) {
     
    $_SESSION['login']=$_GET['login'];
    header('location:profile.php');
}
?>
<form method= "GET">
    <input type = "text" placeholder = "Введите ваша имя" name = 'login'><br>
    <input type = "submit" value ="Ok">
</form>
