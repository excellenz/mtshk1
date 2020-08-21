<?php
session_start();
include "database.php";
include "function.php";

unset($_SESSION['username']);
session_destroy();
header("location: ".MAIN_URL."index.php");