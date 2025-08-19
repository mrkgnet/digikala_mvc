<div class="sidebar_search_right col-span-2">

    <div class="max-w-md mx-auto bg-white  shadow divide-y" id="accordion">
        <div class="accordion-item">
            <button
                class="w-full text-right font-semibold p-2 hover:bg-gray-100 transition accordion-header  flex justify-between">
                گوشی موبایل

                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 9-7 7-7-7" />
                </svg>

            </button>

            <div class="accordion-content hidden px-4 py-2 text-gray-600">
                <div class="max-w-sm mx-auto bg-white rounded-xl  p-4 text-right">
                    <ul id="treeview" class="space-y-2">
                        <!-- سطح ۱ -->
                        <li>
                            <button class="toggle-node font-semibold flex items-center">
                                <span class="arrow">▶</span>
                                <span class="ml-2">گوشی موبایل</span>
                            </button>
                            <ul class="child hidden pl-6 border-r border-gray-300 mt-2 space-y-2">
                                <!-- سطح ۲ -->
                                <li>
                                    <button class="toggle-node flex items-center text-sm">
                                        <span class="arrow">▶</span>
                                        <span class="ml-2">موبایل</span>
                                    </button>
                                    <ul class="child hidden pl-6 border-r border-gray-300 mt-2 space-y-2">
                                        <!-- سطح ۳ -->
                                        <li class="text-xs text-gray-600">همراه</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>



            </div>
        </div>

    </div>

    <!-- by type  -->
    <div class="max-w-md mx-auto bg-white p-4  shadow space-y-4">
        <h2 class="text-xl font-bold border-b pb-2">فیلتر براساس نوع</h2>

        <div class="space-y-2">
            <label class="flex items-center space-x-2 rtl:space-x-reverse gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="گوشی موبایل">
                <span>گوشی موبایل</span>
            </label>

            <label class="flex items-center space-x-2 rtl:space-x-reverse  gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="تبلت">
                <span>تبلت</span>
            </label>

            <label class="flex items-center space-x-2 rtl:space-x-reverse  gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="لپتاپ">
                <span>لپتاپ</span>
            </label>
        </div>



        <div id="selectedTypes" class="text-sm text-gray-600 pt-4"></div>
    </div>

    <!-- by sazande -->
    <div class="max-w-md mx-auto bg-white p-4  shadow space-y-4">
        <h2 class="text-xl font-bold border-b pb-2">فیلتر براساس سازنده</h2>

        <div class="space-y-2">
            <label class="flex items-center space-x-2 rtl:space-x-reverse gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="گوشی موبایل">
                <span>اپل </span>
            </label>

            <label class="flex items-center space-x-2 rtl:space-x-reverse  gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="تبلت">
                <span>سامسونگ</span>
            </label>

            <label class="flex items-center space-x-2 rtl:space-x-reverse  gap-2.5">
                <input type="checkbox" class="accent-blue-500 type-filter" value="لپتاپ">
                <span>ال جی</span>
            </label>
        </div>



        <!-- فیلتر بر اساس رنگ  -->
        <div class="max-w-md mx-auto bg-white p-4 rounded-2xl shadow space-y-4">
            <h2 class="text-xl font-bold border-b pb-2">فیلتر براساس رنگ</h2>

            <div id="selectedColor" class="text-sm text-gray-600 pt-1"></div>


            <div id="colorFilter" class="space-y-2">
                <!-- رنگ قرمز -->
                <button data-color="قرمز"
                    class="flex items-center gap-2 p-2 w-full border rounded-lg hover:bg-gray-100 transition">
                    <span class="w-5 h-5 rounded-full bg-red-500 border"></span>
                    <span>قرمز</span>
                </button>

                <!-- رنگ آبی -->
                <button data-color="آبی"
                    class="flex items-center gap-2 p-2 w-full border rounded-lg hover:bg-gray-100 transition">
                    <span class="w-5 h-5 rounded-full bg-blue-500 border"></span>
                    <span>آبی</span>
                </button>

                <!-- رنگ سبز -->
                <button data-color="سبز"
                    class="flex items-center gap-2 p-2 w-full border rounded-lg hover:bg-gray-100 transition">
                    <span class="w-5 h-5 rounded-full bg-green-500 border"></span>
                    <span>سبز</span>
                </button>

                <!-- رنگ مشکی -->
                <button data-color="مشکی"
                    class="flex items-center gap-2 p-2 w-full border rounded-lg hover:bg-gray-100 transition">
                    <span class="w-5 h-5 rounded-full bg-black border"></span>
                    <span>مشکی</span>
                </button>
            </div>


            <!-- فیلتر براساس رنگ -->
            <script>
                const buttons = document.querySelectorAll('#colorFilter button');
                const output = document.getElementById('selectedColor');

                buttons.forEach(btn => {
                    btn.addEventListener('click', function () {
                        buttons.forEach(b => b.classList.remove('ring', 'ring-offset-2'));
                        this.classList.add('ring', 'ring-offset-2', 'ring-blue-500', 'shadow-2xl');

                        const color = this.getAttribute('data-color');
                        output.innerText = 'رنگ انتخاب‌شده: ' + color;
                    });
                });
            </script>

        </div>





        <div id="selectedTypes" class="text-sm text-gray-600 pt-4"></div>
    </div>

</div>