<?php
session_start();

session_unset();
session_destroy();
echo "Succesfully logout!";
//header("Location : index.php");
header('Refresh: 2; URL = index.php');

