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

                <?php

                if(isset($_GET['my_orders'])){
                    include("my_orders.php");
                }

                ?>

                <?php

                if(isset($_GET['pay_offline'])){
                    include("pay_offline.php");
                }

                ?>

                <?php

                if(isset($_GET['edit_account'])){
                    include("edit_account.php");
                }

                ?>

                <?php

                if(isset($_GET['change_pass'])){
                    include("change_pass.php");
                }

                ?>

                <?php

                if(isset($_GET['delete_account'])){
                    include("delete_account.php");
                }

                ?>

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