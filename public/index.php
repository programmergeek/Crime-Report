<?php

if ($_SERVER['REQUEST_URI'] === '/') {
    include_once "../templates/Index.php";
}

if ($_SERVER['REQUEST_URI'] === '/create_account') {
    include_once "../templates/NewAccount.php";
    echo '<script src="js/signupValidator.js"></script>';
}

if ($_SERVER['REQUEST_URI'] === '/login') {
    include_once '../templates/Login.php';
}
