<?php
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = "client";

    $queryUser = "INSERT INTO `user_tb` (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
    $sqlUser = mysqli_query($con, $queryUser);

    if ($sqlUser) {
        $userId = mysqli_insert_id($con);
        header("Location: client-register-for-account-page3.php?user-id=$userId");
        exit();
    } else {
        // Failed to insert user into the database, handle the error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client/User Login Page 3</title>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <style>
        html {
            font-family: Calibri, Helvetica, sans-serif;
            background: #3C6E71;
        }

        .logo {
            width: 100px;
            height: 120px;
            margin-left: 190px;
        }

        button {
            background-color: #284B63;
            width: 30%;
            color: white;
            padding: 15px;
            margin: 10px 15px;
            border: none;
            cursor: pointer;
            margin-left: 180px;
        }

        form {
            background-color: #EAE0D5;
            width: 35rem;
            margin: auto;
            margin-top: 30px;
            border-radius: 20px;
            box-shadow: 6px 6px 4px 0px #00000066;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border-color: 1px black;
            box-sizing: border-box;
            border-radius: 5px;
        }

        button:hover {
            opacity: 0.7;
        }

        .loginbtn {
            margin: 10px 5px;
            margin-left: 65px;
            width: 75%;
            cursor: pointer;
            background: #283618;
            border-radius: 5px;
        }

        .container {
            padding: 25px;
        }

        .header li {
            display: inline-block;
            padding: .5em 1em;
        }

        .header li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: .5em 1em;
            border-radius: 1em;
        }

        .header li a:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <ul class="header">
        <li><a href="client-user-login-page.php">Login</a></li>
        <li><a href="client-register-for-account-page.php">Sign Up</a></li>
    </ul>
    <form method="POST">
        <div class="container">
            <img class="logo" src="image/logo.png" alt="butterfly-logo">
            <h1>Account Registration</h1>
            <h2>Account Details</h2>
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Email Address</label>
            <input type="text" name="email" required>
            <label>Password</label>
            <input type="password" id="passwordInput" name="password" required>
            <!-- <button type="button" name="generate" onclick="generatePassword()">Generate password</button><br> -->
            <input type="checkbox" required>I agree to the Terms of Service and Privacy Policy
            <button type="submit" name="login" class="loginbtn">SIGN IN</button>
        </div>
    </form>
    <!-- <script>
        function generatePassword() {
            var alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            var pass = [];
            var alphaLength = alphabet.length - 1;
            for (var i = 0; i < 8; i++) {
                var n = Math.floor(Math.random() * (alphaLength + 1));
                pass.push(alphabet[n]);
            }
            var generatedPassword = pass.join("");
            document.getElementById("passwordInput").value = generatedPassword;
        }
    </script> -->
</body>
</html>
