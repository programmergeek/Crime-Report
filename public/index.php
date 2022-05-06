<?php

if ($_SERVER['REQUEST_URI'] === '/') {
    include_once "../templates/Index.php";
}

if ($_SERVER['REQUEST_URI'] === '/create_account') {
    include_once "../templates/NewAccount.php";
}
