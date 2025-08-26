<div class="my-3 shadow-lg">
    <!-- تایمر تخفیف -->
    <div
        class="border-t flex pt-1  bg-white text-center text-red-600 font-bold text-lg items-center justify-center gap-5 border-gray-300 border-b ">
        <p class="px-9"> فرصت باقی مانده تا این تخفیف </p>

        <p id="countdown" style="direction: ltr !important;" class="direction: ltr !important;"></p>

        <!-- اسکریپت تایمر -->
        <?php
             $date_end = $data[2];
        ?>
        <script>
            // تاریخ هدف شمارش معکوس
            const targetDate = new Date("<?=$date_end ?>").getTime();

            const countdownElement = document.getElementById("countdown");

            const countdownTimer = setInterval(() => {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    clearInterval(countdownTimer);
                    countdownElement.innerHTML = " زمان تمام شد : ";
                    document.querySelector('#demo_timer_end').classList.add('active_end_time');
                    return;
                }

                // محاسبه روز، ساعت، دقیقه و ثانیه
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // نمایش شمارش معکوس به صورت قالب
                countdownElement.innerHTML = `
                                      <span style=";display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${days.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${hours.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red;padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${minutes.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${seconds.toString().padStart(2, "0")}
                                            </span>
                                            `;

            }, 1000);
        </script>

    </div>

    <div id="slider_vige" class="grid grid-cols-4 bg-white  relative">

        <!-- اسلایدر سمت راست -->
        <section class="slider2_right col-span-3 relative bg-cover bg-center rounded-lg shadow-lg">


            <!-- اسلایدها -->
            <?php
            $data_slider2 = $data[1];
           
            foreach ($data_slider2 as $row) {
            ?>
                <article
                    class="item flex flex-col bg-white/90 rounded-lg p-2  text-black hidden h-full max-w-4xl mx-auto">

                    <!-- بخش مشخصات -->
                    <div class="flex flex-col md:flex-row gap-6 mb-6">



                        <!-- مشخصات متنی و جدول -->
                        <div class="md:w-1/2">
                            <h3 class="text-center text-3xl font-bold mb-4">جشنواره ماه نو</h3>

                            <div
                                class="flex justify-center gap-4 p-4 rounded-xl text-red-500 font-semibold text-xl">
                                <span class="line-through text-gray-400">
                                    <?= $row['price'] ?>

                                    تومان</span>
                                <span class="text-green-600 font-bold">

                                    <?=  $row['total_price'] ?>
                                    تومان
                                </span>
                            </div>

                            <table class="w-full border border-gray-300 rounded-lg text-center mt-4">
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-3 py-2">نوع هد</td>
                                        <td class="border border-gray-300 px-3 py-2">پن هد</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-3 py-2">جنس</td>
                                        <td class="border border-gray-300 px-3 py-2">آلومینیوم</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-3 py-2">تعداد قطعات</td>
                                        <td class="border border-gray-300 px-3 py-2">20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- بخش تصویر -->
                        <div class="md:w-1/2 flex flex-col items-center justify-center m-auto">
                            <p class="text-center font-bold text-lg mb-4">
                                <?= $row['title'] ?>
                            </p>
                            <img style="max-width: 150px !important;" src="public/images/product/<?= $row['id'] ?>/product_220.jpg"
                                alt="بخار پز فلر" class=" object-contain rounded-lg " />
                            <a href="<?=URL?>product/index/<?= $row['id'] ?>"  type="button"
                                class="bg-green-600 my-4 cursor-pointer duration-200 flex focus:outline-none focus:ring-4 gap-2 hover:bg-red-400 hover:text-white hover:px-8 items-center mb-2 me-2 px-5 py-2.5 rounded-lg  text-center text-sm text-white transition-all shadow-md">
                                <i class="bi bi-cart-plus"></i>
                                مشاهده | خرید
                            </a>



                        </div>

                    </div>



                </article>
            <?php
            }
            ?>

        </section>

        <!-- نویگیتور سمت چپ -->
        <nav id="sliderNavigator" class="slider2_left col-span-1" aria-label="ناوبری اسلایدر">
            <style>
                #sliderNavigator ul>li.active {
                    background: red;
                    color: white;
                    position: relative;
                }
            </style>
            <ul class=" border-r border-gray-200">
                <?php
                $data_slider2 = $data[1];
                foreach ($data_slider2 as $row) {
                ?>
                    <li class="border-b border-gray-200 hover:bg-white cursor-pointer" role="button"
                        tabindex="0" data-slide="0">
                        <span class="block py-2.5 text-center"><?= $row['title'] ?></span>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>


        <!-- تمام شد -->
        <!--time end-->
        <div id="demo_timer_end" style="display: none"
            class="absolute w-full h-full flex items-center justify-center bg-white/20 backdrop-blur-[1px]">

            <style>
                .active_end_time {
                    display: flex !important;
                }
            </style>


            <span
                class="inline-block px-3 py-1 font-lg font-semibold text-white bg-red-600 rounded-full shadow-lg animate-bounce">
                زمان تمام شد
            </span>
        </div>

        <script>
            // منتظر بمون تا کل DOM بارگذاری بشه
            $(document).ready(function() {
                var sliderTag = $("#slider_vige");
                var sliderItems = sliderTag.find('.item');
                var sliderNavigators = $("#sliderNavigator ul li");
                var numItems = sliderItems.length;
                var nextSlide = 0;
                var timeOut = 4000;
                var sliderInterval;

                function showSlide(index) {
                    if (index < 0 || index >= numItems) return;
                    sliderItems.hide();
                    sliderItems.eq(index).fadeIn();
                    sliderNavigators.removeClass("active");
                    sliderNavigators.eq(index).addClass("active");
                    nextSlide = index;
                }

                function slider() {
                    nextSlide++;
                    if (nextSlide >= numItems) nextSlide = 0;
                    showSlide(nextSlide);
                }

                function startSlider() {
                    if (numItems < 2) {
                        showSlide(0);
                        return;
                    }
                    sliderInterval = setInterval(slider, timeOut);
                }

                function stopSlider() {
                    clearInterval(sliderInterval);
                }

                // نمایش اولین اسلاید به محض بارگذاری صفحه
                showSlide(0);
                startSlider();

                // توقف چرخش اسلایدر هنگام ورود موس به داخل
                sliderTag.mouseenter(stopSlider);
                // ادامه چرخش هنگام خروج موس
                sliderTag.mouseleave(startSlider);

                // کلیک روی نویگیتور سمت چپ
                sliderNavigators.click(function() {
                    stopSlider();
                    var index = $(this).index();
                    showSlide(index);
                });
            });
        </script>


    </div>
</div>