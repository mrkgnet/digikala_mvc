  <div class="bg-white shadow rounded overflow-hidden my-3">
      <h3 class="py-3 px-2 bg-gray-50">پربازدید ترین ها </h3>
      <div class="main_slider2 owl-carousel">
          <?php
            $mostViewd = $data[4];
            foreach ($mostViewd as $row) {
            ?>
              <div
                  class="max-w-xs mx-auto bg-white rounded-2xl  hover:shadow-lg transition-shadow duration-300 p-4 text-center">
                  <a href="<?= URL ?>product/index/<?= $row['id'] ?>" class="block space-y-2" target="_blank">
                      <img src="public/images/product/<?= $row['id'] ?>/product_220.jpg" alt="Slide 1" class="mx-auto w-28 rounded-xl">
                      <img src="public/images/exclusive-blue.png" alt="Slide 1" class="mx-auto w-20 rounded-md">
                      <p class="text-gray-800 font-semibold"><?= $row['title']  ?></p>
                      <p class="text-green-600 font-bold"><?= $row['price']  ?> تومان</p>
                  </a>

              </div>
          <?php } ?>


      </div>