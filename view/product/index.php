<!--main-->
<div id="main" class="max-w-screen-xl m-auto my-4 z-0" style="z-index: 0 !important;">

    <!-- محصول -->
    <div class="product_page bg-white ">

        <!-- پیشنهاد شگفت انگیز -->
        <?php

        $productInfo = $data['productInfo'];
      

        if ($productInfo['special'] == 1) {
            require("offer.php");
        }

        ?>

        <!-- product details -->
        <?php require('deatails.php') ?>
    </div>


    <!-- معرفی اجمالی  -->
    <?php

    require('introduction.php');
    require('onlyclicksite.php');
    require("tabs.php")
    ?>


</div>