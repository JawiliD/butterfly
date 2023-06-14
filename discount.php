<!DOCTYPE html>
<html>
<head>
    <title>PHP DISCOUNT FUNCTION</title>
    <style>
        form input{
            padding:1em;
            border-radius:.5em;
        }

        form select{
            padding:1em;
            border-radius:.5em;
        }

        .btn{
            background-color:#373ec1;
            color:white;
            font-weight:bold;
        }
        </style>
</head>
<body>
    <h1>PHP DISCOUNT FUNCTIONt</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required><br><br>

        <label for="discount">Discount:</label>
        <select name="discount" id="discount">
            <option value="none">None (0%)</option>
            <option value="students">Students (40%)</option>
            <option value="senior">Senior (50%)</option>
            <option value="pwd">PWD (60%)</option>
        </select><br><br>
        <input class="btn" type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $discount = $_POST["discount"];

        function MyDiscount($amount, $discount) {
            switch ($discount) {
                case "none":
                    return 0;
                case "students":
                    return $amount * 0.4;
                case "senior":
                    return $amount * 0.5;
                case "pwd":
                    return $amount * 0.6;
                default:
                    return 0;
            }
        }

        $discountAmount = MyDiscount($amount, $discount);
        $total = $amount - $discountAmount;

        echo "<h2>Result</h2>";
        echo "Amount: $amount<br>";
        echo "Discount: $discountAmount<br>";
        echo "Total: $total";
    }
    ?>
</body>
</html>