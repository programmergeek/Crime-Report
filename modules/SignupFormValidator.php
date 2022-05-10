<?php

if (isset($_POST['submit'])) {
    // sanitize user input
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone-number']);
    $password = md5("th1s15Sparta@" . htmlspecialchars($_POST['password'])); // salt and hash password
    $address = htmlspecialchars($_POST['address']);

    // call controller function
}
