<div id="footer"> <!-- #footer pocinje-->
    <div class="container"> <!-- container pocinje-->
        <div class="row"> <!-- row pocinje-->
            <div class="col-sm-6 col-md-3"> <!-- #col-sm-6 col-md-3 pocinje-->

                <h4>Pages</h4>

                <ul> <!-- ul pocinje-->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul> <!-- ul zavrsava-->

                <hr>

                <h4>User Section</h4>

                <ul> <!-- ul pocinje-->
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>  <!-- ul zavrsava-->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div> <!-- col-sm-6 col-md-3 zavrsava-->

            <div class="com-sm-6 col-md-3">  <!-- com-sm-6 col-md-3 pocinje-->

                <h4>Top Products Categories</h4>

                <ul> <!-- ul pocinje-->

                    <?php

                    $get_p_cats = "select * from product_categories";

                    $run_p_cats = mysqli_query($con,$get_p_cats);

                    while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                        $p_cat_id = $row_p_cats['p_cat_id'];

                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo"
                        
                            <li>                     
                            
                                <a href='shop.php?p_cat= $p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                                                   
                            </li>
                        
                        ";

                    }

                    ?>

                </ul>  <!-- ul zavrsava-->

                <hr class="hidden-md hidden-lg">

            </div>  <!-- com-sm-6 col-md-3 zavrsava-->

            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 pocinje-->

                <h4>Find Us</h4>

                <p> <!-- p pocinje-->

                    <Strong>M-Dev Media inc.</Strong>
                    <br/>Hrvatska
                    <br/>Varazdin
                    <br/>099/508-6594
                    <br/><strong>Bruno Premuzaj</strong>

                </p> <!-- p zavrsava-->

                <a href="contact.php">Check Our Contact Page</a>

                <hr class="hidden-md hidden-lg">

            </div> <!-- col-sm-6 col-md-3 zavrsava-->

            <div class="col-sm-6 col-md-3">

                <h4>Get The News</h4>

                <p class="text-muted">
                    Dont Miss Our Latest Products
                </p>

                <form action=""method="post"> <!-- form pocinje-->
                    <div class="input-group"> <!-- input-group pocinje-->

                        <input type="text" class="form-control" name="email">

                        <span class="input-group-btn"> <!-- input-group-btn pocinje-->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span>  <!-- input-group-btn zavrsava-->

                    </div> <!-- input-group zavrsava-->
                </form> <!-- form zavrsava-->

                <hr>

                <h4>Keep In Touch</h4>

                <p class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-envelope"></a>
                </p>

            </div>
        </div> <!-- row zavrsava-->
    </div> <!-- container zavrsava-->
</div> <!-- #footer zavrsava-->


<div id="copyright"> <!-- #copyright pocinje-->
    <div class="container"> <!-- container pocinje-->
        <div class="col-md-6"> <!-- col-md-6 pocinje-->

            <p class="pull-left">&copy;2020 Bruno Store All Rights Reserve</p>

        </div> <!-- col-md-6 zavrsava-->
        <div class="col-md-6"> <!-- col-md-6 pocinje-->

            <p class="pull-right">Theme By:<a href="#">Bruno Premuzaj</a></p>

            </div> <!-- col-md-6 zavrsava-->
    </div> <!-- container zavrsava-->
</div>   <!-- #copyright zavrsava-->