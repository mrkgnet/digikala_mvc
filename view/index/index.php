<style>
    * {
        font-weight: bold
    }
</style>

<!--main-->

<div id="main" class="max-w-screen-xl m-auto">
    <div id="banner_top" class="mt-3 shadow-lg">
        <img src="public/images/banner.jpg" class="w-full" alt="">
    </div>
    <div class="grid grid-cols-4 gap-3 my-3">
        <?php require("sidebar_right.php") ?>
        <!--sidebar left-->
        <div id="sidebar_left" class="col-span-3">
            <!-- اصلی slider-->
         

            <?php
            
            include("slider1.php");
            include("services_features.php");
            include("slider2.php");
            ?>
         

           

            <!--فقط در دیجی کالا-->
            <?php require('only_clicksite.php') ?>

            <!--direct access-->
            <?php require('direct_access.php') ?>

            <!-- پر بازدید ترین ها-->
            <?php require('most_viewed.php') ?>

            <!--   پر فروش ترین ها-->
            <?php require('most_saled.php') ?>

            <!--   جدید ترین کالاها-->
            <?php require('last_product.php') ?>



        </div>
    </div>

</div>