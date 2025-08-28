    <?php
        $option = Model::getOption();
     
    ?>
    
    
    <footer class=" bg-gray-600 text-white w-full">
        <div class="footer_top flex justify-between  max-w-screen-xl m-auto py-3.5 ">
            <div class="">
                <p>7روز هفته پاسخگوی شما هستیم</p>
            </div>
            <div>
                <ul class="flex gap-3">
                    <li class="flex gap-2 ">
                        <span>
                            <?= $option['tel'] ?>
                          
                        </span>
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                        </svg>

                    </li>

                    <li class="flex gap-2 ">
                        <span>سوالات متداول</span>
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.529 9.988a2.502 2.502 0 1 1 5 .191A2.441 2.441 0 0 1 12 12.582V14m-.01 3.008H12M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </li>

                    <li class="flex  gap-2 ">
                        <span>
                            <?= $option['email'] ?>
                        </span>
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16v-5.5A3.5 3.5 0 0 0 7.5 7m3.5 9H4v-5.5A3.5 3.5 0 0 1 7.5 7m3.5 9v4M7.5 7H14m0 0V4h2.5M14 7v3m-3.5 6H20v-6a3 3 0 0 0-3-3m-2 9v4m-8-6.5h1" />
                        </svg>

                    </li>
                </ul>
            </div>
        </div>


        <div class="footer_bottom bg-gray-100 w-full">
            <div class="footer_bottom_main grid grid-cols-5 max-w-screen-xl m-auto text-black">
                <div class="col-span-1">
                    <ul class="my-3 space-y-3.5">
                        <li>
                            <a href="#" class=" font-bold">
                                راهنمای خرید از دیجی کالا
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                ثبت سفارش
                            </a>

                        </li>
                        <li>

                            <a href="#">
                                رویه های ارسال سفارش
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <ul class="my-3 space-y-3.5">
                        <li>
                            <a href="#" class=" font-bold ">
                                خدمات مشتریان
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                ثبت سفارش
                            </a>

                        </li>
                        <li>

                            <a href="#">
                                رویه های ارسال سفارش
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-3">
                    <p class="py-3 font-bold ">اولین نفری باشید که مطلع میشوید</p>
                    <div class="flex  gap-1.5 justify-end my-2 py-4 ">
                        <input type="text" placeholder="ایمیل خود را وارد کنید..."
                            class="w-full max-w-sm px-4 py-2 border border-gray-300  focus:ring-2 focus:ring-blue-500 focus:outline-none transition placeholder-gray-400 shadow-sm" />
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6  shadow-md transition duration-300 cursor-pointer">
                            ارسال
                        </button>

                    </div>


                </div>
            </div>

        </div>
    </footer>

    <!-- 4. فایل‌های اسکریپت شخصی -->
   <!-- owelcaruse2 -->
    <script>
        $(document).ready(function() {
            $(".main_slider2").owlCarousel({
                rtl: true,
                loop: true,
                margin: 1,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                navText: [
                    '<span class="bg-gray-200 hover:bg-gray-400 text-gray-700 p-2 rounded-full">&#10094;</span>',
                    '<span class="bg-gray-200 hover:bg-gray-400 text-gray-700 p-2 rounded-full">&#10095;</span>'
                ],
                responsive: {
                    0: {
                        items: 2
                    },
                    640: {
                        items: 3
                    },
                    1024: {
                        items: 5
                    }
                }
            });
        });


     

    </script>

 
</body>

</html>
