<?php

$email = htmlspecialchars($_POST['email']);
$password = md5("th1s15Sparta@" . htmlspecialchars($_POST['password'])); // salt and hash password

// controller goes here