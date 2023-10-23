<?php
session_start();
include('connect.php');


// Handle item deletion
if (isset($_GET['delete_item'])) {
    $delete_item_id = $_GET['delete_item'];

    if (isset($_SESSION['shopping_cart'])) {
        foreach ($_SESSION['shopping_cart'] as $key => $item) {
            if ($item['id'] === $delete_item_id) {
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
    }
}

// Handle quantity change
if (isset($_GET['change_quantity'])) {
    $change_item_id = $_GET['change_quantity'];
    $change_type = $_GET['type']; // plus or minus

    if (isset($_SESSION['shopping_cart'])) {
        foreach ($_SESSION['shopping_cart'] as &$item) {
            if ($item['id'] === $change_item_id) {
                if ($change_type === 'plus') {
                    $item['quantity'] += 1;
                } elseif ($change_type === 'minus' && $item['quantity'] > 1) {
                    $item['quantity'] -= 1;
                }
            }
        }
    }
}


// Calculate the total price
$total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
         body {
            background: #ddd;
            min-height: 100vh;
            vertical-align: middle;
            display: flex;
            font-family: sans-serif;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .title {
            margin-bottom: 5vh;
        }

        .card {
            margin: auto;
            max-width: 950px;
            width: 90%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media (max-width: 767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
        }

        @media (max-width: 767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65);
        }

        @media (max-width: 767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title b {
            font-size: 1.5rem;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0 1vh;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
        }

        img {
            width: 3.5rem;
        }

        .back-to-shop {
            margin-top: 4.5rem;
        }

        h5 {
            margin-top: 4vh;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn {
            background-color: #000;
            border-color: #000;
            color: white;
            width: 100%;
            font-size: 0.7rem;
            margin-top: 4vh;
            padding: 1vh;
            border-radius: 0;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)),
                url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted">
                        <?php
                        if (isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"]) > 0) {
                            echo count($_SESSION["shopping_cart"]) . ' items';
                        } else {
                            echo '0 items';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"]) > 0) {
                foreach ($_SESSION["shopping_cart"] as $result) {
                    echo '<div class="row border-top border-bottom">';
                    echo '<div class="row main align-items-center">';
                    echo '<div class="col-2"><img class="img-fluid" src="' . $result["img"] . '"></div>';
                    echo '<div class="col"><div class="row">' . $result["name_food"] . '</div></div>';
                    echo '<div class="col">';
                    echo '<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>';
                    echo '<a href="?delete_item=' . $result["id"] . '" class="text-danger">Delete</a>';
                    echo '</div>';
                    echo '<div class="col">฿ ' . $result["price"] . ' <span class="close">&#10005;</span></div>';
                    echo '</div>';
                    echo '</div>';

                    // Add the item's price to the total
                    $total_price += $result["price"];
                }
            } else {
                echo "ไม่มีสินค้าในตะกร้า";
            }
            ?>
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left: 0;">ITEMS <?php echo count($_SESSION["shopping_cart"]); ?></div>
                <div class="col text-right">฿ <?php echo number_format($total_price, 2); ?></div>
            </div>
            <!-- Rest of your HTML code for the summary section -->
            </div>
                    <a href="checkout.php" button class="btn">CHECKOUT</a>
                </div>
        </div>
    </div>
    <div>
    <p><a href="rachasawei.php">Back To RACHASAWEI</a></p>
</div> 
</div>

</body>
</html>