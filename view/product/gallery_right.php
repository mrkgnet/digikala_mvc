  <div class="pdetails_right col-span-2">

                <!-- اشتراک گذاری و علاقه مندی -->
                <div class="flex gap-4 items-center text-gray-600 text-lg justify-end py-2">
                    <!-- آیکون افزودن به علاقه‌مندی -->
                    <button class="hover:text-red-500 transition-colors duration-200" title="افزودن به علاقه‌مندی">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                        </svg>

                    </button>

                    <!-- آیکون اشتراک‌گذاری -->
                    <button class="hover:text-blue-500 transition-colors duration-200" title="اشتراک‌گذاری">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M7.926 10.898 15 7.727m-7.074 5.39L15 16.29M8 12a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm12 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm0-11a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                        </svg>

                    </button>
                </div>

                <!-- گالری تصاویر -->


                <!-- استایل و نمایش محصول -->
                <div id="productMain" class="max-w-md mx-auto p-4 bg-white shadow-lg rounded-2xl">
                    <!-- تصویر اصلی -->
                    <div class="relative overflow-hidden rounded-xl border border-gray-200 mb-4 py-4">
                        <img id="mainImage" src="public/images/small/1472662586.jpg"
                            data-zoom-image="public/images/large/1472662586.jpg" alt="تصویر اصلی"
                            class=" h-auto object-cover m-auto w-64 transition-opacity duration-300 opacity-100" />

                        <!-- اسکریپت الونت زووم -->
                        <script>
                            $("#mainImage").elevateZoom({ zoomWindowOffetx: -600, scrollZoom: true, });
                        </script>
                    </div>

                    <!-- گالری تصاویر -->
                    <ul id="bottom_gallery" class="flex justify-end  gap-3">

                        <!-- سه نقطه -->
                        <li data-main-image="public/images/product/gallery/main/ax1.jpg"
                            class=" openModalBtn flex justify-center items-center px-3 border border-gray-300 rounded-md cursor-pointer">
                            <svg class="w-[42px] h-[42px] text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                                    d="M6 12h.01m6 0h.01m5.99 0h.01" />
                            </svg>

                        </li>


                        <li data-main-image="public/images/product/gallery/main/ax1.jpg" class="px-1 openModalBtn">
                            <img src="public/images/product/gallery/thumbnail/ax1.jpg"
                                class="thumbnail w-20 h-20  object-cover rounded-xl border border-gray-100  hover:border-red-500 cursor-pointer ring-0"
                                alt="محصول 1" />
                        </li>

                        <li data-main-image="public/images/product/gallery/main/ax2.jpg" class=" openModalBtn px-1 ">
                            <img src="public/images/product/gallery/thumbnail/ax2.jpg"
                                class="thumbnail w-20 h-20 object-cover rounded-xl border border-gray-100 hover:border-red-500 cursor-pointer"
                                alt="محصول 2" />
                        </li>



                    </ul>

                    <!-- پاپ اپ گالری تصاویر -->
                    <div class="product_gallery">


                        <!-- مدال -->
                        <div id="default-modal"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-black bg-opacity-10"
                            style="background-color: rgb(0 0 0 / 46%);">


                            <div class="relative p-4 w-full max-w-5xl max-h-full mx-auto mt-5">
                                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">

                                    <!--  هدر مدال -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            گوشی سامسونگ مدل 21
                                        </h3>
                                        <button id="closeModalBtn" type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>




                                    <!--  بدنه مدال -->
                                    <div id="product_gallery" class=" p-4 md:p-5 grid grid-cols-5">

                                        <!-- قسمت سمت راست مدال -->
                                        <div class="item right active col-span-4">
                                            <img src="" class="w-96 mainImage" alt="">
                                        </div>

                                        <!-- قسمت سمت چپ مدال -->
                                        <div class="col-span-1 left">
                                            <div class="--auto p-4 bg-white border-r border-gray-300">


                                                <ul
                                                    class="space-y-4 max-h-[300px] overflow-y-auto scrollbar-thin scrollbar-thumb-indigo-500 scrollbar-track-gray-200">


                                                    <li data-main-image="public/images/product/gallery/main/ax1.jpg"
                                                        class="cursor-pointer flex items-center p-2 transition justify-center border-b border-gray-300 shadow-sm">
                                                        <img src="public/images/product/gallery/thumbnail/ax1.jpg"
                                                            alt="تصویر 1" class="w-30  rounded-lg object-cover " />

                                                    </li>


                                                    <li data-main-image="public/images/product/gallery/main/ax2.jpg"
                                                        class="cursor-pointer flex items-center p-2 transition justify-center border-b border-gray-300 shadow-sm">
                                                        <img src="public/images/product/gallery/thumbnail/ax2.jpg"
                                                            alt="تصویر 1" class="w-30  rounded-lg object-cover " />

                                                    </li>





                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>




                    <!-- galllery picture -->
                    <script>
                        // نمایش اسلاید ها در مدال
                        $(document).ready(function () {
                            var productGallery = $("#product_gallery");
                            var productGalleryThumbnail = productGallery.find('.left ul li')

                            productGalleryThumbnail.click(function () {
                                var mainImageUrl = $(this).attr("data-main-image")
                                productGallery.find(".mainImage").attr('src', mainImageUrl)
                            })

                            // نمایش مدال
                            $('.openModalBtn').on('click', function () {
                                $('#default-modal').fadeIn(50).removeClass('hidden flex').addClass('flex');

                                var bottomGalleryAttr = $(this).attr("data-main-image")
                                productGallery.find(".mainImage").attr('src', bottomGalleryAttr)

                            });

                            // بستن مدال با دکمه
                            $('#closeModalBtn, .closeModalBtn').on('click', function () {
                                $('#default-modal').fadeOut(50, function () {
                                    $(this).addClass('hidden').removeClass('flex');
                                });
                            });

                            // بستن مدال با کلیک روی پس‌زمینه
                            $('#default-modal').on('click', function (e) {
                                if (e.target.id === 'default-modal') {
                                    $(this).fadeOut(50).addClass('hidden').removeClass('flex');
                                }
                            });
                        });

                    </script>



                </div>

            </div>