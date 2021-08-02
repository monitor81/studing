<?
session_start();
if (!empty($_SESSION['login'])) echo "Добро пожаловать, ".$_SESSION['login'];
else echo "ВЫ не авторизовались";