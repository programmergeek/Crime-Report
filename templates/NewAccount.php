<?php include '../modules/SignupFormValidator.php' ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/styles.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>

<body>
    <form action="" method="post" class="grid cols-2" style="justify-content: center; align-items: center; height: 96vh;">
        <div class="border rounded-lg w-4-10" id="user-info" style="height: 550px;">
            <div class="input-block center w-80percent">
                <label for="first-name" class="text-md">First name</label>
                <input type="text" name="first-name" id="first-name" class="text-input" maxlength="10" required>
            </div>
            <div class="input-block center w-80percent">
                <label for="last-name">Last name</label>
                <input type="text" name="last-name" id="first-name" class="text-input" maxlength="10" required>
            </div>
            <div class="input-block center w-80percent">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="text-input" maxlength="50" required>
                <h6 class="error-message" id="email-error"></h6>
            </div>
            <div class="input-block center w-80percent">
                <label for="phone-number">Phone number</label>
                <input type="tel" name="phone_number" id="phone-number" class="text-input" maxlength="8" required>
                <h6 class="error-message" id="phone-error"></h6>
            </div>
            <div class="input-block center w-80percent">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="text-input" maxlength="32" required>
            </div>
        </div>
        <div id="account-type" style="height: fit-content;">
            <div class="border w-3-10 rounded-lg p-md p-l-lg p-b-xl">
                <h2 class="bold">Where do you live?</h2>

                <div class="input-block w-90percent">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="" class="text-input" required>
                </div>

            </div>
            <div class="w-100percent flex flex-col" style="justify-content: center; margin-top: 10px;">
                <div class="flex justify-center">
                    <button type="submit" name="submit" class="btn primary-btn long-btn">Create Account</button>
                </div>
                <a href="/login" class="flex justify-center" style="text-decoration: none;  width: 100%; margin-top: 15px;">
                    <div class="link" style="width: fit-content;">
                        Already have an account? Login
                    </div>
                </a>
            </div>
        </div>
    </form>
</body>

</html>