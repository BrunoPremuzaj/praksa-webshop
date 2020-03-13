<?php

include("includes/header.php");

?>

<div id="content"> <!--#content pocinje-->
    <div class="container"> <!--container pocinje-->
        <div class="col-md-12"> <!--col-md-12 pocinje-->

            <ul class="breadcrumb"> <!--breadcrumb pocinje-->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>

                <li>

                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                    
                </li>

                <li> <?php echo $pro_title; ?> </li>

            </ul> <!--breadcrumb zavrsava-->

        </div> <!--col-md-12 zavrsava-->

        <div class="col-md-3"> <!--col-md-3 pocinje-->

            <?php

            include("includes/sidebar.php");

            ?>

        </div> <!--col-md-3 zavrsava-->

        <div class="col-md-9"> <!--col-md-9 pocinje-->
            <div id="productMain" class="row"> <!--row pocinje-->
                <div class="col-sm-6"> <!--col-sm-6 pocinje-->
                    <div id="mainImage"> <!--mainImage pocinje-->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--carousel slide pocinje-->
                            <ol class="carousel-indicators"> <!--carousel-indicators pocinje-->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol> <!--carousel-indicators zavrsava-->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a">
                                    </center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b">
                                    </center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c">
                                    </center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--left carousel-control pocinje-->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a> <!--left carousel-control zavrsava-->

                            <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control pocinje-->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a> <!--right carousel-control zavrsava-->

                        </div> <!--carousel slide zavrsava-->
                    </div> <!--mainImage zavrsava-->
                </div> <!--col-sm-6 zavrsava-->

                <div class="col-sm-6"> <!--col-sm-6 pocinje-->
                    <div class="box"> <!--box pocinje-->
                        <h1 class="text-center"> <?php echo $pro_title; ?> </h1>

                        <?php add_cart(); ?>

                        <form action="details.php?add cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"> <!--form-horizontal pocinje-->
                            <div class="form-group"> <!--form-group pocinje-->
                                <label for="" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7"> <!--col-md-7 pocinje-->
                                    <select name="product_qty" id="" class="form-control"> <!--select pocinje-->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select> <!--select zavrsava-->
                                </div> <!--col-md-7 zavrsava-->

                            </div> <!--form-group zavrsava-->

                            <div class="form-group"> <!--form-group pocinje-->
                                <label class="col-md-5 control-label">Product Size</label>

                                <div class="col-md-7"> <!--col-md-7 pocinje-->

                                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"> <!--form-control pocinje-->

                                        <option disabled selected>Select a Size</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>

                                    </select> <!--form-control zavrsava-->
                                    
                                </div> <!--col-md-7 zavrsava-->
                            </div> <!--form-group zavrsava-->

                            <p class="price">$ <?php echo $pro_price; ?></p>

                            <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                        </form> <!--form-horizontal zavrsava-->

                    </div> <!--box zavrsava-->

                    <div class="row" id="thumbs"> <!--row pocinje-->

                        <div class="col-xs-4"> <!--col-xs-4 pocinje-->
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"> <!--thumb pocinje-->
                                <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                            </a> <!--thumb zavrsava-->
                        </div> <!--col-xs-4 zavrsava-->

                        <div class="col-xs-4"> <!--col-xs-4 pocinje-->
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"> <!--thumb pocinje-->
                                <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                            </a> <!--thumb zavrsava-->
                        </div> <!--col-xs-4 zavrsava-->

                        <div class="col-xs-4"> <!--col-xs-4 pocinje-->
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"> <!--thumb pocinje-->
                                <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                            </a> <!--thumb zavrsava-->
                        </div> <!--col-xs-4 zavrsava-->

                    </div> <!--row zavrsava-->

                </div> <!--col-sm-6 zavrsava-->

            </div> <!--row zavrsava-->

            <div class="box" id="details"> <!--box pocinje-->

                <h4>Product Details</h4>

                <p>

                    <?php echo $pro_desc; ?>

                </p>

                <h4>Size</h4>

                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>

                <hr>

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

                    $pro_id = $row_products['products_id'];

                    $pro_title = $row_products['products_title'];

                    $pro_img1 = $row_products['products_img1'];

                    $pro_price = $row_products['products_price'];

                    echo"
                    
                    <div class='col-md-4 col-sm-6 center-responsive'>
                    
                         <div class='product same-height'
                         
                            <a href='details.php?pro_id=$pro_id'>     
                         
                              <img class='img-responsive' src='admin_area/product_images/$pro_img1'>  
                            
                            </a>
                            
                            <div class='text'>
                            
                            <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                            
                            <p class='price'> $ $pro_price </p>
                            
                            </div>                               
                    
                         </div>
                    
                    </div>
                    
                    ";

                }

                ?>

            </div> <!--#row same-height-row zavrsava-->

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