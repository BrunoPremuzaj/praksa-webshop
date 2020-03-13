<?php

    $active='Home';
    include("includes/header.php");

?>

<div class="container" id="slider"> <!--container pocinje-->

    <div class="col-md-12"> <!--col-md-12 pocinje-->

        <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!--carousel slide pocinje-->

            <ol class="carousel-indicators">  <!--carousel-indicators pocinje-->

                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>


            </ol> <!--carousel-indicators zavrsava-->

            <div class="carousel-inner">  <!--carousel-inner pocinje-->

                <?php

                $get_slides="select * from slider LIMIT 0,1";

                $run_slides = mysqli_query($con,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    
                    <div class='item active'>
                    
                    <img src='admin_area/slides_images/$slide_image'>
                    
                    </div>
                    
                    ";

                }

                $get_slides="select * from slider LIMIT 1,3";

                $run_slides = mysqli_query($con,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    
                    <div class='item'>
                    
                    <img src='admin_area/slides_images/$slide_image'>
                    
                    </div>
                    
                    ";

                }

                ?>

            </div> <!--carousel-inner zavrsava-->

            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--left carousel-control pocinje-->

                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>


            </a> <!--left carousel-control zavrsava-->

            <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control pocinje-->

                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>


            </a> <!--right carousel-control zavrsava-->

        </div> <!--carousel slide zavrsava-->

    </div>  <!--col-md-12 zavrsava-->

</div>  <!--container zavrsava-->

<div id="advantages"> <!--advantages pocinje-->

    <div class="container"> <!--container pocinje-->

        <div class="same-height-row"> <!--same-height-row pocinje-->

            <div class="col-sm-4"> <!--col-sm-4 pocinje-->

                <div class="box same-height"> <!--box same-height pocinje-->

                    <div class="icon"> <!--icon pocinje-->

                        <i class="fa fa-heart"></i>

                    </div> <!--icon zavrsava-->

                    <h3><a href="#">Best Offer</a></h3>
                    <p> Best possible offers</p>
                    
                </div> <!--box same-height zavrsava-->


            </div> <!--col-sm-4 zavrsava-->

            <div class="col-sm-4"> <!--col-sm-4 pocinje-->

                <div class="box same-height"> <!--box same-height pocinje-->

                    <div class="icon"> <!--icon pocinje-->

                        <i class="fa fa-tag"></i>

                    </div> <!--icon zavrsava-->

                    <h3><a href="#">Best Prices</a></h3>
                    <p> Compare us with another store.</p>

                </div> <!--box same-height zavrsava-->


            </div> <!--col-sm-4 zavrsava-->

            <div class="col-sm-4"> <!--col-sm-4 pocinje-->

                <div class="box same-height"> <!--box same-height pocinje-->

                    <div class="icon"> <!--icon pocinje-->

                        <i class="fa fa-thumbs-up"></i>

                    </div> <!--icon zavrsava-->

                    <h3><a href="#">Original products</a></h3>
                    <p>We offer you only the best products</p>

                </div> <!--box same-height zavrsava-->


            </div> <!--col-sm-4 zavrsava-->


        </div> <!--same-height-row zavrsava-->

    </div> <!--container zavrsava-->

</div> <!--advantages zavrsava-->

<div id="hot"> <!--hot pocinje-->

    <div class="box"> <!--box pocinje-->

        <div class="container"> <!--container pocinje-->

            <div class="col-md-12"> <!--col-md-12 pocinje-->

                <h2>
                    Our Latest Products
                </h2>

            </div> <!--col-md-12 zavrsava-->

        </div> <!--container zavrsava-->

    </div> <!--box zavrsava-->

</div> <!--hot zavrsava-->

<div id="content" class="container"> <!--container pocinje-->

    <div class="row"> <!--row pocinje-->

        <?php

        getPro();

        ?>

    </div> <!--row zavrsava-->

</div> <!--container zavrsava-->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>