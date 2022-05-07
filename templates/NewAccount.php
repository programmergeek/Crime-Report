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
    <h1>Create new account.</h1>
    <form action="" method="post" class="flex">
        <div class="border rounded-lg flex flex-col w-4-10 absolute" id="user-info" style="height: 80vh;">

            <label for="first-name">First name</label>
            <input type="text" name="first-name" id="" class="text-input">

            <label for="last-name">Last name</label>
            <input type="text" name="last-name" id="" class="text-input">

            <label for="email">Email</label>
            <input type="email" name="email" id="" class="text-input">

            <label for="phone-number">Phone number</label>
            <input type="tel" name="phone_number" id="" class="text-input">

            <label for="password">Password</label>
            <input type="password" name="password" id="" class="text-input">
        </div>
        <div class="form">
            <h3>Are you a resident or an officer?</h3>
            <input type="checkbox" name="resident" id="">
            <label for="resident">Resident</label>

            <input type="checkbox" name="officer" id="">
            <label for="officer">Officer</label>
        </div>
        <input type="submit" class="btn primary-btn long-btn">
    </form>
</body>

</html>