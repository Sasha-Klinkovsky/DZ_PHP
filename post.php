<?php
declare(strict_types=1);

session_start();

$_SESSION['name'] = $_POST['username'];

header('Location: index.php'); 
