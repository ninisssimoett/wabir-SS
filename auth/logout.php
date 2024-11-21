<?php
// session = login nya suatu user

session_start();
session_destroy();
header('location: login.php');


?>