 <div class="bg-white shadow rounded overflow-hidden shadow-lg ">

     <style>
         .owl-carousel .owl-item img {
             display: block;
             width: revert-layer;
         }
     </style>
     <h3 class="py-3 px-2 bg-gray-50 font-bold text-lg">فقط در دیجی کالا</h3>
     <div class="main_slider2 owl-carousel">

         <?php
            $only_digikala = $data[3];
         
            foreach ($only_digikala as $row) {

            ?>

             <div
                 class="max-w-xs mx-auto bg-white rounded-2xl hover:shadow-2xl transition-all duration-300 p-4 text-center">
                 <a href="<?=URL?>product/index/<?= $row['id'] ?>" target="_blank" class="block space-y-2">
                     <img src="public/images/product/<?=$row['id'] ?>/product_220.jpg"
                         class="mx-auto w-28 rounded-xl transform hover:scale-105 transition-transform duration-300"
                         alt="">
                     <img src="public/images/exclusive-blue.png" class="mx-auto w-20 rounded-md" alt="">
                     <p class="text-gray-800 font-semibold">
                        <?= $row['title'] ?>
                    
                    </p>
                     <p class="text-green-600 font-bold">
                        <?= $row['price'] ?>
                     </p>
                 </a>
             </div>
         <?php
            }
            ?>

     </div>



 </div>