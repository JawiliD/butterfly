<?php
include 'config.php';

$id = $_GET['user-id'];

if (isset($_POST['register'])) {
    $firstName = $_POST["fname"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $business = $_POST["business"];

    $queryUser = "UPDATE `user_tb` SET firstName='$firstName', surname='$surname', address='$address', contact='$contact', businessName='$business' WHERE id='$id'";
    $sqlUser = mysqli_query($con, $queryUser);

    if ($sqlUser) {
        echo "<script>
        alert('Registration Successful...You may now Login');
        setTimeout(function() {
            window.location.href = 'client-register-for-account-page3.php?user-id=$id';
        }, 2000); // Delay the redirection by 2 seconds (2000 milliseconds)
    </script>";
    
        // header("Location: client-register-for-account-page3.php?user-id=$id");
        exit();
    } else {
        // Failed to update user details, handle the error
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client/Register for Account Page</title>
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

        .nextbtn {
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
            <h2>Owner Details</h2>
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="surname" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Contact Number</label>
            <input type="text" name="contact" required>
            <h2>Business Details</h2>
            <label>Business Name</label>
            <input type="text" name="business" required>
            <button type="submit" name="register" class="nextbtn">Register</button>
        </div>
    </form>
</body>

</html>
