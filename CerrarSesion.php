<?php

require "main_app/login.php";

$_SESSION= [];

session_unset();

session_destroy();

header("location: iniciarsesion.php");


?>