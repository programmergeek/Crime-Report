<?php

if (isset($_POST['submit'])) {
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $phone_number = htmlspecialchars($_POST['phone-number']);
    $password = htmlspecialchars($_POST['password']);
    $profile_pic = htmlspecialchars($_POST['profile_pic']);
    $account_type = null;
    $address = null;
    $officer_id = null;

    if ($_POST['resident'] === "on") {
        $account_type = "resident";
        $address = $_POST['address'];
    } elseif ($_POST['officer'] === "on") {
        $account_type = "officer";
        $officer_id = $_POST['officer-id'];
    }
}
