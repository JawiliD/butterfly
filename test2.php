<?php
include 'config.php';
$id = $_GET['generate-id'];
$querySelect = "SELECT * FROM `ltr_permit` WHERE id=$id";
$sqlSelect = mysqli_query($con, $querySelect);
$row = mysqli_fetch_assoc($sqlSelect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <style>
        /* Styles for the payment modal */
        .payment-modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .payment-modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Payment Modal -->
    <div id="paymentModal" class="payment-modal">
        <div class="payment-modal-content">
            <span class="close" onclick="closePaymentModal()">&times;</span>
            <h2>Payment</h2>
            <!-- Add your payment form or content here -->
            <p>Payment details and form go here...</p>
        </div>
    </div>

    <div class="right-header">
        <!-- Existing code for the right header -->
    </div>

    <div class="top-header">
        <!-- Existing code for the top header -->
    </div>

    <div class="content">
        <!-- Existing code for the content section -->
    </div>

    <script>
        // Open the payment modal when the page is loaded
        window.addEventListener('DOMContentLoaded', function() {
            openPaymentModal();
        });

        // Function to open the payment modal
        function openPaymentModal() {
            var paymentModal = document.getElementById('paymentModal');
            paymentModal.style.display = 'block';
        }

        // Function to close the payment modal
        function closePaymentModal() {
            var paymentModal = document.getElementById('paymentModal');
            paymentModal.style.display = 'none';
        }
    </script>
</body>
</html>
