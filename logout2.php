<?php
session_start();

session_unset();
session_destroy();
echo "Succesfully logout!";
//Method 1
//header("Location : index.php");

//Method 2
header('Refresh: 2; URL = index.php');

