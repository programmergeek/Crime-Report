<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/styles.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post" style="">
        <div style="height: 99vh;" class="flex justify-center flex-col">
            <div class="border rounded-lg w-4-10 bg-white center" style="height: 250px;">
                <div class="input-block center w-80percent">
                    <label for="email" class="text-md">Email</label>
                    <input type="email" name="email" id="" class="text-input" required>
                </div>

                <div class="input-block center w-80percent">
                    <label for="password" class="text-md">Password</label>
                    <input type="password" name="password" id="" class="text-input" required>
                </div>
            </div>
            <button type="submit" class="btn primary-btn center long-btn" style="margin-top: 15px;">Login</button>
            <div class="flex justify-center" style="margin-top: 15px;">
                <a href="/create_account" class="link" style="width: fit-content;">Don't have an account? Signup</a>
            </div>
        </div>
    </form>
    <script src="js/loginValidator.js"></script>
</body>

</html>