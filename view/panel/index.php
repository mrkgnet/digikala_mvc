<style>
    *{font-weight: bold}
</style>


<!--main-->
<div id="main" class="max-w-screen-xl m-auto  mt-3">
    <!--مشخصات کاربر -->
   <?php require ('user_profile.php')?>
    <!--    گزارش عملکرد-->
    <?php require ('gozaresh.php')?>

   <!--    تب ها-->
    <div class="tab_portal my-4">
      <?php require ('tabs.php')?>
    </div>
</div>


