<?php
$current_file =$_SERVER['SCRIPT_NAME'];
ob_start();
session_start();
$query="SELECT `email` FROM `register` WHERE registerno='".$_SESSION['regno']."'";
?>