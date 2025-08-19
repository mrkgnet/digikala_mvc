  <div class="tab-content hidden animate-fadeIn">
                <!-- comment top  -->
                <div class="comment_top grid grid-cols-2">
                    <div class="col-span-1">
                        <!-- بخش میانگین نظرات کاربران -->
                        <div class=" my-6 space-y-4">
                            <h4
                                class="text-base md:text-lg font-semibold text-gray-800 bg-yellow-100 border border-yellow-300 rounded-lg px-4 py-2 inline-block shadow-sm">
                                امتیاز کاربران به:
                                <span>موبایل سامسونگ</span>

                            </h4>

                            <!-- تکرار برای هر پارامتر -->
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700 font-medium">کیفیت ساخت</span>
                                    <span class="text-gray-500">7 از 10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-green-500 h-1.5 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700 font-medium">ارزش خرید</span>
                                    <span class="text-gray-500">9 از 10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-blue-500 h-1.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700 font-medium">طراحی و ظاهر</span>
                                    <span class="text-gray-500">6 از 10</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 1cm"></div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="col-span-1">
                        <p class="py-2 font-black">شما هم میتوانید نظر خود را ارسال کنید</p>
                        <p class="py-2 font-black">برای ثبت نظر بهتر است وارد شوید</p>



                        <div class="flex justify-end my-6">
                            <button
                                class="group  cursor-pointer relative overflow-hidden flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-2 px-5 rounded-xl shadow-lg transition transform duration-300 hover:scale-105 hover:shadow-2xl">

                                <svg class="w-5 h-5 text-white group-hover:rotate-[-10deg] transition duration-300"
                                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20h9M16.5 3.5a2.121 2.121 0 113 3L7 19l-4 1 1-4L16.5 3.5z" />
                                </svg>

                                <span class="relative z-10">نظر خود را بنویسید</span>
                            </button>
                        </div>



                    </div>


                </div>


                <!-- comment bottom -->
                <div class="user_comments_bottom">




                    <!-- comment top -->
                    <div
                        class="flex justify-between items-center bg-gray-100 border border-gray-200 p-4 rounded-xl shadow-sm mb-6">
                        <!-- عنوان نظرات -->
                        <div class="flex items-center gap-2 text-blue-700">
                            <i class="bi bi-chat-left-dots"></i>
                            <span class="font-extrabold text-lg">نظرات کاربران</span>
                        </div>

                        <!-- مرتب سازی -->
                        <div class="flex items-center gap-3">
                            <label for="sort-comments" class="text-sm font-medium text-gray-700">مرتب‌سازی بر
                                اساس:</label>
                            <select id="sort-comments"
                                class="border border-gray-300 bg-white text-gray-800 md:w-52 px-4 py-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm hover:border-gray-400">
                                <option value="latest">جدیدترین نظرات</option>
                                <option value="helpful">مفیدترین نظرات</option>
                            </select>
                        </div>
                    </div>






                    <!-- نظر کاربر -->
                    <div class="commnet_user border p-2 my-5 rounded-lg shadow border-gray-400">
                        <div class=" comment_header grid grid-cols-2 items-center  bg-gray-100 py-2">
                            <!-- شخص نظر دهنده -->
                            <div class="col-span-1 flex flex-col">
                                <span>
                                    <i class="bi bi-chat-left"></i>
                                    مرتضی سعادت
                                </span>
                                <span>
                                    23 تیر
                                </span>
                            </div>

                            <!-- سمت چپی   -->
                            <div
                                class="flex flex-col space-y-2 md:flex-row md:items-center md:justify-between items-center justify-between w-full px-2.5">



                                <div
                                    class="flex flex-col space-y-2 md:flex-row md:items-center md:justify-between w-full">

                                    <!-- متن سوال -->
                                    <div class="text-gray-800 font-medium text-sm md:text-base m-0 p-0">
                                        آیا این نظر برایتان مفید بود؟
                                    </div>

                                    <!-- دکمه‌های لایک و دیسلایک -->
                                    <div class="flex items-center gap-4">

                                        <!-- لایک -->
                                        <button id="likeBtn"
                                            class="flex items-center gap-1 px-3 py-0.5 bg-green-50 hover:bg-green-100 text-green-700 text-sm  transition-all border rounded">

                                            <i class="bi bi-hand-thumbs-up"></i>
                                            <span id="likeCount">0</span>
                                        </button>

                                        <!-- دیسلایک -->
                                        <button id="dislikeBtn"
                                            class="flex items-center gap-1 px-3 py-0.5 bg-red-50 hover:bg-red-100 text-red-600 text-sm transition-all  border rounded">
                                            <i class="bi bi-hand-thumbs-down"></i>

                                            <span id="dislikeCount">0</span>
                                        </button>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="comment_content grid grid-cols-5">
                            <!-- comment content right -->
                            <div class="col-span-2">

                                <div class=" my-6 space-y-4">


                                    <!-- تکرار برای هر پارامتر -->
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-700 font-medium">کیفیت ساخت</span>
                                            <span class="text-gray-500">7 از 10</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1.5">
                                            <div class="bg-green-500 h-1.5 rounded-full" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-700 font-medium">ارزش خرید</span>
                                            <span class="text-gray-500">9 از 10</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1.5">
                                            <div class="bg-blue-500 h-1.5 rounded-full" style="width: 90%">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-700 font-medium">طراحی و ظاهر</span>
                                            <span class="text-gray-500">6 از 10</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-1.5">
                                            <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 1cm">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- comment content left -->

                            <div class="col-span-3">
                                <div class="bg-white  p-6 space-y-4  ">
                                    <!-- عنوان -->
                                    <h2 class="text-xl font-bold text-gray-600 border-b border-gray-400 pb-2">
                                        واقعا محشره
                                    </h2>

                                    <!-- نقاط قوت و ضعف -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                        <!-- نقاط قوت -->
                                        <div class="bg-green-50 border-l-4 border-green-600 p-4 rounded-md">
                                            <h3 class="text-green-700 font-semibold mb-2">نقاط قوت</h3>
                                            <ul class="list-disc list-inside text-green-800 space-y-1">
                                                <li>طراحی زیبا</li>
                                                <li>سرعت پردازش بالا</li>
                                                <li>عمر باتری مناسب</li>
                                            </ul>
                                        </div>

                                        <!-- نقاط ضعف -->
                                        <div class="bg-red-50 border-l-4 border-red-600 p-4 rounded-md">
                                            <h3 class="text-red-700 font-semibold mb-2">نقاط ضعف</h3>
                                            <ul class="list-disc list-inside text-red-800 space-y-1">
                                                <li>کیفیت پایین دوربین در شب</li>
                                                <li>عدم پشتیبانی از کارت حافظه</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- توضیحات کلی -->
                                    <div class="bg-gray-50 p-4 rounded-md text-gray-700 leading-relaxed">
                                        <p>
                                            در مجموع این محصول با توجه به قیمت و امکاناتی که ارائه می‌دهد، گزینه
                                            مناسبی برای کاربران عادی و نیمه‌حرفه‌ای به‌شمار می‌آید. تنها برخی
                                            محدودیت‌های فنی ممکن است برای کاربران خاص مسئله‌ساز باشد.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>





                </div>


            </div>
