<?

if (isset($_GET['login'])) {
    echo "Привет ". $_GET['login'];
    session_start();
    $_SESSION['login']=$_GET['login'];
    header(location:'profile.php');
}
?>
<form method= "GET">
    <input type = "text" placeholder = "Введите ваша имя" name = 'login'><br>
    <input type = "submit" value ="Ok">
</form>
