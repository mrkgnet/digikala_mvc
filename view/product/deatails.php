<div class="product_details grid grid-cols-5 gap-4 border border-gray-200">


    <!-- right -->
    <?php require("gallery_right.php") ?>

    <!-- left -->
    <div class="pdetails_left col-span-3">

        <!-- title -->
        <div class="flex bg-gray-300 items-center justify-between mb-4 pb-2 px-2 py-3 my-2 mx-2 ">
            <!-- عنوان محصول -->
            <h2 class="text-xl py-2 font-semibold text-gray-800">
                <?= $productInfo['title'] ?>
            </h2>

            <!-- سیستم امتیازدهی -->
            <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-400">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                </svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                </svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                </svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                </svg>
                <svg class="w-5 h-5 text-gray-300" viewBox="0 0 20 20">
                    <path
                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
                </svg>
            </div>
        </div>

        <!-- content -->
        <div class="">


            <!-- عنوان و رنگ انتخاب‌شده -->
            <div class="space-y-2">

                <h3 class="">انتخاب رنگ</h3>
                <div id="selectedColorName" class="text-sm text-gray-600 font-semibold">
                    رنگ انتخاب‌شده: <span class="text-black" id="colorName">نداری</span>
                </div>

                <!-- دایره‌های رنگ -->
                <div id="colorPicker" class="flex gap-1">
                    <?php
                    $all_colors = $productInfo['all_colors'];

                  


                    foreach ($all_colors as $colorGroup) {
                        foreach ($colorGroup as $color) { // اینجا لایه دوم هم پیمایش میشه
                    ?>
                            <div data-color="<?= $color['title'] ?>"
                                class="w-6 h-6 rounded-full cursor-pointer transition"
                                style="background-color: <?= $color['hex'] ?>;">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>




                <!-- <div data-color="سیاه" class="w-6 h-6 rounded-full  cursor-pointer transition"
                    style="background-color: #000;">
                </div> -->

                <!-- اسکریپت انتخاب رنگ -->
                <script>
                    $(document).ready(function() {
                        $('#colorPicker div').on('click', function() {
                            // حذف حالت انتخاب از بقیه
                            $('#colorPicker div').removeClass('ring-2 ring-black');

                            // اعمال انتخاب روی رنگ کلیک‌شده
                            $(this).addClass('ring-2 ring-black');

                            // گرفتن نام رنگ
                            const name = $(this).data('color');

                            // نمایش در بخش بالایی
                            $('#colorName').text(name);
                        });
                    });
                </script>
            </div>

            <!-- گارانتی -->
            <div class="garantee" class="w-1/2 h-4">

                <!-- عنوان گارانتی -->
                <h3
                    class="bg-gray-100 text-gray-800 text-base font-bold px-3 py-1  w-max flex items-center gap-2 my-2">
                    گارانتی:
                    <span id="selectedWarranty" class="text-blue-600 font-semibold">...</span>
                </h3>

                <!-- نمایش انتخاب گارانتی -->
                <div id="dropdownWrapper" class="relative w-full max-w-sm">
                    <!-- باکس انتخاب -->
                    <div id="dropdownToggle"
                        class="w-full px-4 py-2 bg-white border border-gray-300  shadow-sm text-sm text-gray-800 cursor-pointer flex justify-between items-center">
                        <span id="selectedWarranty">نوع گارانتی را انتخاب کنید</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                    <!-- لیست گزینه‌ها -->
                    <ul id="warrantyList"
                        class="absolute z-10 w-full mt-1 hidden bg-white border border-gray-300  shadow-lg max-h-40 overflow-y-auto">
                        <li data-value="شرکتی_۱۸"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100 text-gray-800 text-sm">
                            گارانتی ۱۸ ماهه شرکتی</li>
                        <li data-value="طلایی_۱۲"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100 text-gray-800 text-sm">
                            گارانتی ۱۲ ماهه طلایی</li>
                        <li data-value="بدون_گارانتی"
                            class="px-4 py-2 cursor-pointer hover:bg-blue-100 text-gray-800 text-sm">
                            بدون گارانتی</li>
                        <li data-value="اصالت" class="px-4 py-2 cursor-pointer hover:bg-blue-100 text-gray-800 text-sm">
                            گارانتی اصالت و سلامت فیزیکی</li>
                    </ul>

                    <!-- input hidden برای فرم -->
                    <input type="hidden" id="warrantyValue" name="warranty">
                </div>

                <!-- jQuery -->

                <script>
                    $(function() {
                        // باز و بسته کردن منو
                        $('#dropdownToggle').on('click', function() {
                            $('#warrantyList').toggleClass('hidden');
                        });

                        // انتخاب آیتم
                        $('#warrantyList li').on('click', function() {
                            const label = $(this).text().trim();
                            const value = $(this).data('value');

                            $('#selectedWarranty').text(label);
                            $('#warrantyValue').val(value);
                            $('#warrantyList').addClass('hidden');
                        });

                        // بستن منو با کلیک بیرون
                        $(document).on('click', function(e) {
                            if (!$(e.target).closest('#dropdownWrapper').length) {
                                $('#warrantyList').addClass('hidden');
                            }
                        });
                    });
                </script>

            </div>


            <!-- price -->
            <div class="price my-4 ">
                <div class=" w-full bg-white pl-8    space-y-4 text-right" style="padding-left: 30px;">

                    <!-- عنوان -->
                    <h2 class="text-base font-semibold text-gray-800 border-b pb-2">جزئیات قیمت</h2>

                    <!-- قیمت اصلی -->
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span>قیمت:</span>
                        <span class="line-through">۴۵۰,۰۰۰ تومان</span>
                    </div>

                    <!-- تخفیف -->
                    <div class="flex justify-between items-center text-sm text-red-500 font-semibold">
                        <span>تخفیف:</span>
                        <span>۱۵٪</span>
                    </div>

                    <!-- قیمت نهایی -->
                    <div class="flex justify-between items-center text-lg font-bold text-green-600 border-t pt-3">
                        <span>قیمت برای شما:</span>
                        <span>۳۸۵,۰۰۰ تومان</span>
                    </div>

                    <!-- دکمه‌ها -->
                    <div class="grid grid-cols-2 gap-3 pt-3">
                        <button
                            class=" cursor-pointer flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-medium py-2  transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9h14l-2-9M9 21a1 1 0 11-2 0 1 1 0 012 0zm10 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            افزودن به سبد
                        </button>

                        <button
                            class="flex cursor-pointer items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2  transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4h16v2H4V4zm0 14h16v2H4v-2zm0-7h16v2H4v-2z" />
                            </svg>
                            مقایسه
                        </button>
                    </div>

                </div>


            </div>



        </div>
        <hr class="border-t border-gray-300 my-4">


    </div>
</div>


<!-- services features -->
<?php require("services_featurs.php") ?>