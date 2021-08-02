<?
session_start();
if (isset ($_SESSION['login'])) echo "Добро пожаловать, ".$_SESSION['login'];