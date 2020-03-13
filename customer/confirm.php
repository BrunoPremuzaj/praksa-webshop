<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M-Dev store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
<div id="top"> <!-- pocinje top -->
    <div class="container"><!-- pocinje container-->
        <div class="col-md-6 offer"> <!-- pocinje col-->
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="checkout.php">4 items in your cart / total price:$300</a>

        </div><!-- zavrsava col-->
        <div class="col-md-6"> <!-- pocinje col6-->
            <ul class="menu"> <!-- pocinje menu-->
                <li>
                    <a href="../customer_register.php">Register</a>
                </li>
                <li>
                    <a href="my_account.php">My Account</a>
                </li>
                <li>
                    <a href="../cart.php">Go To Cart</a>
                </li>
                <li>
                    <a href="../checkout.php">Login</a>
                </li>


            </ul> <!-- zavrsava menu-->


        </div><!-- zavrsava col6-->

    </div><!-- zavrsava container -->


</div> <!--  zavrsava top-->

<div id="navbar" class="navbar navbar-default"> <!--navbar pocinje-->

    <div class="container"> <!--container pocinje-->
        <div class="navbar-header"> <!--navcontainer pocinje-->

            <a href="index.php" class="navbar-brand home"> <!--navbar-brand home pocinje-->
                <img src="images/ecom-store-logo.png" alt="M-DEV store Logo" class="hidden-xs">
                <img src="images/ecom-store-logo-mobile.png" alt="M-DEV store Logo Mobile" class="visible-xs">

            </a><!--navbar-brand home zavrsava-->

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only"> Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>

            </button>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only"> Toggle Search</span>
                <i class="fa fa-search"></i>

            </button>

        </div> <!--navcontainer zavrsava-->

        <div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse collapse pocinje-->

            <div class="padding-nav"> <!--padding-nav pocinje-->

                <ul class="nav navbar-nav left"> <!--nav navbar-nav left pocinje-->
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../shop.php">Shop</a>
                    </li>
                    <li class="active">
                        <a href="my_account.php">My account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>

                </ul> <!--nav navbar-nav left zavrsava-->

            </div> <!--padding-nav zavrsava-->

            <a href="cart.php" class="btn navbar-btn btn-primary right"> <!--btn navbar-btn btn-primary pocinje-->
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items In Your Cart</span>

            </a>  <!--btn navbar-btn btn-primary zavrsava-->

            <div class="navbar-collapse collapse right">  <!--navbar-collapse collapse right pocinje-->
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!--btn btn-primary navbar-btn pocinje-->

                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>

                </button> <!--btn btn-primary navbar-btn zavrsava-->

            </div> <!--navbar-collapse collapse right zavrsava-->

            <div class="collapse clearfix" id="search"> <!--collapse clearfix pocinje-->

                <form method="get" action="results.php" class="navbar-form"> <!--navbar-form pocinje-->

                    <div class="input-group"> <!--input-group pocinje-->

                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                        <span class="input-group-btn"> <!--input-group-btn pocinje-->

                        <button type="submit" name="search" value="Search" class="btn btn-primary"> <!--btn btn-primary pocinje-->

                            <i class="fa fa-search"></i>

                        </button> <!--btn btn-primary zavrsava-->

                            </span> <!--input-group-btn zavrsava-->

                    </div> <!--input-group zavrsava-->

                </form> <!--navbar-form zavrsava-->

            </div> <!--collapse clearfix zavrsava-->

        </div> <!--navbar-collapse collapse zavrsava-->

    </div> <!--container zavrsava-->

</div> <!--navbar zavrsava-->

<div id="content"> <!--#content pocinje-->
    <div class="container"> <!--container pocinje-->
        <div class="col-md-12"> <!--col-md-12 pocinje-->

            <ul class="breadcrumb"> <!--breadcrumb pocinje-->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    My account
                </li>
            </ul> <!--breadcrumb zavrsava-->

        </div> <!--col-md-12 zavrsava-->

        <div class="col-md-3"> <!--col-md-3 pocinje-->

            <?php

            include("includes/sidebar.php");

            ?>

        </div> <!--col-md-3 zavrsava-->

        <div class="col-md-9"> <!--col-md-9 pocinje-->

            <div class="box"> <!--box pocinje-->

                <h1 align="center"> Please confirm your payment </h1>

                <form action="confirm.php" method="post" enctype="multipart/form-data"> <!--form pocinje-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Invoice No: </label>

                        <input type="text" class="form-control" name="invoice_no" required>

                    </div> <!--form-group zavrsava-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Amount sent: </label>

                        <input type="text" class="form-control" name="amount_sent" required>

                    </div> <!--form-group zavrsava-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Select Payment Mode: </label>

                        <select name="payment_mode" class="form-control"> <!--form-control pocinje-->

                            <option> Select Payment </option>
                            <option> Back Code </option>
                            <option> PayPal </option>
                            <option> Mastercard </option>
                            <option> Western Union </option>

                        </select> <!--form-control zavrsava-->

                    </div> <!--form-group zavrsava-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Transaction / Reference ID: </label>

                        <input type="text" class="form-control" name="ref_no" required>

                    </div> <!--form-group zavrsava-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Omni Paisa / East Paisa: </label>

                        <input type="text" class="form-control" name="code" required>

                    </div> <!--form-group zavrsava-->

                    <div class="form-group"> <!--form-group pocinje-->

                        <label> Payment Date: </label>

                        <input type="text" class="form-control" name="date" required>

                    </div> <!--form-group zavrsava-->

                    <div class="text-center"> <!--text-center pocinje-->

                        <button class="btn btn-primary btn-lg"> <!--btn btn-primary btn-lg pocinje-->

                            <i class="fa fa-user-md"></i> Confirm Payment

                        </button> <!--btn btn-primary btn-lg zavrsava-->

                    </div> <!--text-center zavrsava-->

                </form> <!--form zavrsava-->

            </div> <!--box zavrsava-->

        </div> <!--col-md-9 zavrsava-->

    </div> <!--container zavrsava-->
</div> <!--#content zavrsava-->


<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>