  <div>
        <div class=" bg-white p-4 border border-gray-200  shadow-sm">
            <h3 class="text-lg font-bold text-gray-800 mb-2">معرفی اجمالی محصول</h3>

            <div id="productIntro"
                class="text-gray-700 leading-relaxed overflow-hidden max-h-24 transition-all duration-300">
                <p>
                   <?= $productInfo['introduction'] ?>
                </p>
            </div>

            <button id="toggleIntro"
                class="relative mx-auto block mt-4 px-6 py-2 text-sm font-medium  bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full shadow-lg hover:from-blue-600 hover:to-indigo-600 hover:shadow-xl transition duration-300 cursor-pointer overflow-hidden">

                <!-- هاله سمت چپ -->
                <span
                    class="absolute left-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-blue-400/40 rounded-full blur-md -z-10"></span>

                <!-- هاله سمت راست -->
                <span
                    class="absolute right-0 top-1/2 -translate-y-1/2 w-6 h-6 bg-indigo-400/40 rounded-full blur-md -z-10"></span>

                نمایش بیشتر
            </button>

        </div>

        <script>
            $(document).ready(function () {
                let expanded = false;

                $('#toggleIntro').on('click', function () {
                    $('#productIntro').toggleClass('max-h-24')
                        .toggleClass('max-h-[1000px]');
                    $(this).text(expanded ? 'نمایش بیشتر' : 'بستن');
                    expanded = !expanded;
                });
            });
        </script>

    </div>