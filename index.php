<?
if (isset($_GET['login'])) {
    echo "Привет ". $_GET['login'];
}
?>
<form method= "GET">
    <input type = "text" placeholder = "Введите ваша имя" name = 'login'><br>
    <input type = "submit" value ="Ok">
</form>
