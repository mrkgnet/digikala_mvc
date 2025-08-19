<!--main-->
<div id="main" class="max-w-screen-xl m-auto">
    <!-- search page  -->
    <div id="page-filter" class="grid grid-cols-7 my-4 gap-2.5 rounded overflow-hidden">

        <!-- سایدبار سمت راست -->
        <?php require('sidebar.php') ?>
        <!-- content  -->
        <div class="content_search col-span-5 bg-white">

            <!-- برد کرامب  -->
                        <?php require('navigator.php') ?>
            

            <!--  filters top -->
            <?php require('filter_top.php') ?>

            <!-- سرچ و نمایش همه کالاهای موجود -->
            <?php require('search_top.php') ?>

            <!--مرتب سازی بر اساس -->
           <?php require('sort_top.php') ?>
            <!-- محصولات -->
            <?php require ('product.php') ?>

        </div>

    </div>


</div>