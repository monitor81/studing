<?
session_start();
if (!empty($_SESSION['login'])) {
	echo "Добро пожаловать, ".$_SESSION['login'];
	include 'form_contact.php';



}
else echo "ВЫ не авторизовались";