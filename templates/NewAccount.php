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
    <form action="" method="post" class="grid cols-2" style="justify-content: center;">
        <div class="border rounded-lg w-4-10 absolute" id="user-info" style="height: 95vh;">
            <div class="input-block center w-80percent">
                <label for="first-name" class="text-md">First name</label>
                <input type="text" name="first-name" id="" class="text-input">
            </div>
            <div class="input-block center w-80percent">
                <label for="last-name">Last name</label>
                <input type="text" name="last-name" id="" class="text-input">
            </div>
            <div class="input-block center w-80percent">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="text-input">
            </div>
            <div class="input-block center w-80percent">
                <label for="phone-number">Phone number</label>
                <input type="tel" name="phone_number" id="" class="text-input">
            </div>
            <div class="input-block center w-80percent">
                <label for="password">Password</label>
                <input type="password" name="password" id="" class="text-input">
            </div>
        </div>
        <div id="account-type" style="height: 30vh;">
            <div class="border w-3-10 rounded-lg p-md p-l-lg p-b-xl">
                <h2 class="bold">Are you a resident or an officer?</h2>
                <div class="grid cols-2-auto">
                    <div>
                        <input type="checkbox" name="resident" id="">
                        <label for="resident">Resident</label>
                    </div>

                    <div>
                        <input type="checkbox" name="officer" id="">
                        <label for="officer">Officer</label>
                    </div>
                </div>

                <div class="input-block w-90percent">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="" class="text-input">
                </div>

                <div class="input-block w-90percent">
                    <label for="offer-id">Officer ID</label>
                    <input type="text" name="officer-id" id="" class="text-input">
                </div>
            </div>
            <div class="w-100percent flex" style="justify-content: center; margin-top: 10px;">
                <button type="submit" class="btn primary-btn long-btn">Create Account</button>
            </div>
        </div>
    </form>
</body>

</html>