<?php

    $active='Cart';
    include("includes/header.php");


function update_cart()
{

    global $con;

    if (isset($_POST['update'])) {


        foreach ($_POST['remove'] as $remove_id) {

            $delete_product = "delete from cart where p_id = " . $remove_id;

            $run_delete = mysqli_query($con, $delete_product);

            if ($run_delete) {

                echo "<script>window.open('cart.php','_self')</script>";

            }

        }

    }

}

update_cart();


?>

<div id="content"> <!--#content pocinje-->
    <div class="container"> <!--container pocinje-->
        <div class="col-md-12"> <!--col-md-12 pocinje-->

            <ul class="breadcrumb"> <!--breadcrumb pocinje-->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Cart
                </li>
            </ul> <!--breadcrumb zavrsava-->

        </div> <!--col-md-12 zavrsava-->

        <div id="cart" class="col-md-9"> <!--col-md-9 pocinje-->

            <div class="box"> <!--box pocinje-->

                <form action="cart.php" method="post" enctype="multipart/form-data"> <!--form pocinje-->

                    <h1>Shopping Cart</h1>

                    <?php

                    $ip_add = getRealIpUser();

                    $select_cart = "select * from cart where ip_add='$ip_add'";

                    $run_cart = mysqli_query($con,$select_cart);

                    $count = mysqli_num_rows($run_cart);

                    ?>

                    <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>

                    <div class="table-responsive"> <!--table-responsive pocinje-->

                        <table class="table"> <!--table pocinje-->

                            <thead> <!--thead pocinje-->

                            <tr> <!--tr pocinje-->

                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Size</th>
                                <th colspan="1">Delete</th>
                                <th colspan="2">Sub-Total</th>

                            </tr> <!--tr zavrsava-->

                            </thead> <!--thead zavrsava-->

                            <tbody> <!--tbody pocinje-->

                            <?php

                            $total = 0;

                            while($row_cart = mysqli_fetch_array($run_cart)){

                                $pro_id = $row_cart['p_id'];

                                $pro_size = $row_cart['p_size'];

                                $pro_qty = $row_cart['qty'];

                                    $get_products = "select * from products where product_id='$pro_id'";

                                    $run_products = mysqli_query($con,$get_products);

                                    while ($row_products = mysqli_fetch_array($run_products)){

                                        $product_title = $row_products['product_title'];

                                        $product_img1 = $row_products['product_img1'];

                                        $only_price = $row_products['product_price'];

                                        $sub_total = $row_products['product_price']*$pro_qty;

                                        $total += $sub_total;

                            ?>

                            <tr> <!--tr pocinje-->

                                <td>

                                    <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a">

                                </td>

                                <td>

                                    <a href="details.php?pro_id=<?php echo $pro_id;?>"> <?php echo $product_title; ?> </a>

                                </td>

                                <td>

                                    <?php echo $pro_qty; ?>

                                </td>

                                <td>

                                    <?php echo $only_price; ?>

                                </td>

                                <td>

                                    <?php echo $pro_size; ?>

                                </td>

                                <td>

                                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">

                                </td>

                                <td>

                                    $<?php echo $sub_total; ?>

                                </td>

                            </tr> <!--tr zavrsava-->

                            <?php } } ?>

                            </tbody> <!--tbody zavrsava-->

                            <tfoot> <!--tfoot pocinje-->

                            <tr> <!--tr pocinje-->

                                <th colspan="5">Total</th>
                                <th colspan="2">$<?php echo $total; ?></th>

                            </tr> <!--tr zavrsava-->

                            </tfoot> <!--tfoot zavrsava-->

                        </table> <!--table zavrsava-->

                    </div> <!--table-responsive zavrsava-->

                    <div class="box-footer"> <!--box-footer pocinje-->

                        <div class="pull-left"> <!--pull-left pocinje-->

                            <a href="index.php" class="btn btn-default"> <!--btn btn-default pocinje-->

                                <i class="fa fa-chevron-left"></i> Continue Shopping

                            </a> <!--btn btn-default zavrsava-->

                        </div> <!--pull-left zavrsava-->

                        <div class="pull-right"> <!--pull-right pocinje-->

                            <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!--btn btn-default pocinje-->

                                <i class="fa fa-refresh"></i> Update Cart

                            </button> <!--btn btn-default zavrsava-->

                            <a href="checkout.php" class="btn btn-primary">

                                Proceed To Checkout <i class="fa fa-chevron-right"></i>

                            </a>

                        </div> <!--pull-right zavrsava-->

                    </div> <!--box-footer zavrsava-->

                </form> <!--form zavrsava-->

            </div> <!--box zavrsava-->



            <div id="row same-height-row"> <!--#row same-height-row pocinje-->
                <div class="col-md-3 col-sm-6"> <!--col-md-3 col-sm-6 pocinje-->
                    <div class="box same-height headline"> <!--box same-height headline pocinje-->
                        <h3 class="text-center">Products You May Like</h3>
                    </div> <!--box same-height headline zavrsava-->
                </div> <!--col-md-3 col-sm-6 zavrsava-->

                <?php

                $get_products = "select * from products order by rand() LIMIT 0,3";

                $run_products = mysqli_query($con,$get_products);

                while($row_products=mysqli_fetch_array($run_products)){

                    $pro_id = $row_products['product_id'];

                    $pro_title = $row_products['product_title'];

                    $pro_price = $row_products['product_price'];

                    $pro_img1 = $row_products['product_img1'];

                    echo"

                <div class='col-md-3 col-sm-6 center-responsive'> <!--col-md-3 col-sm-6 center-responsive pocinje-->
                    <div class='product same-heigh'> <!--product same-height pocinje-->
                        <a href='details.php?pro_id=$pro_id'>
                            <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
                        </a>

                        <div class='text'> <!--text pocinje-->
                            <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>

                            <p class='price'>$$pro_price</p>

                        </div> <!--text zavrsava-->

                    </div> <!--product same-height zavrsava-->
                </div> <!--col-md-3 col-sm-6 center-responsive zavrsava-->
                                    
                    ";

                }

                ?>



            </div> <!--#row same-height-row zavrsava-->


        </div> <!--col-md-9 zavrsava-->

        <div class="col-md-3"> <!--col-md-3 pocinje-->

            <div id="order-summary" class="box"> <!--box pocinje-->

                <div class="box-header"> <!--box-header pocinje-->

                    <h3>Order Summary</h3>

                </div> <!--box-header zavrsava-->

                <p class="text-muted"> <!--text-muted pocinje-->

                    Shipping and additional costs are calculated based on value you have entered

                </p> <!--text-muted zavrsava-->

                <div class="table-responsive"> <!--table-responsive pocinje-->

                    <table class="table"> <!--table pocinje-->

                        <tbody> <!--tbody pocinje-->

                        <tr> <!--tr pocinje-->

                            <td> Order All Sub-Total </td>
                            <th> $<?php echo $total; ?> </th>

                        </tr> <!--tr zavrsava-->

                        <tr> <!--tr pocinje-->

                            <td> Shipping and Handling </td>
                            <td> $0 </td>

                        </tr> <!--tr zavrsava-->

                        <tr> <!--tr pocinje-->

                            <td> Tax </td>
                            <th> $0 </th>

                        </tr> <!--tr zavrsava-->

                        <tr class="total"> <!--tr pocinje-->

                            <td> Total </td>
                            <th> $<?php echo $total; ?> </th>

                        </tr> <!--tr zavrsava-->

                        </tbody> <!--tbody zavrsava-->

                    </table> <!--table zavrsava-->

                </div> <!--table-responsive zavrsava-->

            </div> <!--box zavrsava-->

        </div> <!--col-md-3 zavrsava-->

    </div> <!--container zavrsava-->
</div> <!--#content zavrsava-->


<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>
