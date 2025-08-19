


    <!--main-->
    <div id="main" class="max-w-screen-xl m-auto bg-white mt-4 ">

        <!-- order steps -->
        <style>
            .order_steps .step>div.active::before {
                content: "✔️";
                color: green;
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
            }
        </style>
        <div class="order_steps my-5">
            <div id="stepper" class="flex items-center justify-between bg-white p-6 rounded shadow">
                <div class="step text-center relative">
                    <div class="circle   w-10 h-10 rounded-full  text-white flex items-center justify-center mx-auto 
                        transition-all bg-green-500">
                        1</div>
                    <p class="text-sm mt-2">ورود به دیجی کالا </p>
                </div>
                <div class="line flex-1 h-1 bg-green-500 mx-2 transition-all">
                </div>
                <div class="step text-center relative">
                    <div
                        class="circle w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center mx-auto transition-all">
                        2</div>
                    <p class="text-sm mt-2">اطلاعات ارسال سفارش</p>
                </div>
                <div class="line flex-1 h-1 bg-green-500 mx-2 transition-all">
                </div>
                <div class="step text-center relative">
                    <div
                        class="circle w-10  bg-green-500 h-10 rounded-full  text-white flex items-center justify-center mx-auto transition-all">
                        3</div>
                    <p class="text-sm mt-2  "> بازبینی سفارش </p>
                </div>
                <div class="line flex-1 h-1 bg-green-500 mx-2 transition-all">
                </div>
                <div class="step text-center relative">
                    <div
                        class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                        4</div>
                    <p class="text-sm mt-2"> اطلاعات پرداخت </p>
                </div>
                <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
                </div>

            </div>

            <div class="text-center mt-8">
                <button id="nextStep"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">مرحله
                    بعد</button>
            </div>

        </div>


        <!-- شیوه های پرداخت -->
        <!-- Modern Checkout Section -->
        <div class="w-full my-4 max-w-2xl mx-auto bg-gradient-to-b from-gray-50 to-white rounded-3xl shadow-xl p-8 space-y-8 rtl">

            <!-- کد تخفیف -->
            <div class="space-y-2">
                <label class="block text-gray-700 font-semibold text-lg">🎁 کد تخفیف</label>
                <div class="flex gap-2">
                    <input type="text" placeholder="کد تخفیف خود را وارد کنید"
                        class="flex-1 border border-gray-300 rounded-2xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                    <button
                        class="px-5 py-3 bg-green-600 text-white rounded-2xl font-medium hover:bg-green-700 hover:shadow-md transition">
                        اعمال
                    </button>
                </div>
            </div>

            <!-- کارت هدیه -->
            <div class="space-y-2">
                <label class="block text-gray-700 font-semibold text-lg">💳 کارت هدیه</label>
                <div class="flex gap-2">
                    <input type="text" placeholder="شماره کارت هدیه خود را وارد کنید"
                        class="flex-1 border border-gray-300 rounded-2xl px-4 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <button
                        class="px-5 py-3 bg-blue-600 text-white rounded-2xl font-medium hover:bg-blue-700 hover:shadow-md transition">
                        ثبت
                    </button>
                </div>
            </div>

            <!-- مبلغ قابل پرداخت -->
            <div
                class="flex justify-between items-center bg-white/70 backdrop-blur-md p-5 rounded-2xl border shadow-md font-semibold text-lg">
                <span class="text-gray-700">💰 مبلغ کل قابل پرداخت:</span>
                <span class="text-green-600 text-2xl font-bold">15,050,000 تومان</span>
            </div>

            <!-- شیوه های پرداخت -->
            <div class="space-y-4">
                <span class="block text-gray-700 font-semibold text-lg">💳 شیوه‌های پرداخت</span>
                <div class="space-y-3">
                    <label
                        class="flex items-center gap-3 p-4 border rounded-2xl cursor-pointer bg-white hover:bg-green-50 hover:border-green-400 shadow-sm transition">
                        <input type="radio" name="payment" class="w-5 h-5 text-green-600" checked>
                        <span class="font-medium text-gray-700">پرداخت آنلاین با زرین‌پال</span>
                    </label>
                    <label
                        class="flex items-center gap-3 p-4 border rounded-2xl cursor-pointer bg-white hover:bg-green-50 hover:border-green-400 shadow-sm transition">
                        <input type="radio" name="payment" class="w-5 h-5 text-green-600">
                        <span class="font-medium text-gray-700">پرداخت آنلاین با بانک پاسارگاد</span>
                    </label>
                    <label
                        class="flex items-center gap-3 p-4 border rounded-2xl cursor-pointer bg-white hover:bg-green-50 hover:border-green-400 shadow-sm transition">
                        <input type="radio" name="payment" class="w-5 h-5 text-green-600">
                        <span class="font-medium text-gray-700">کارت به کارت</span>
                    </label>
                </div>
            </div>

            <!-- دکمه خرید -->
            <button
                class="w-full py-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-2xl text-lg font-bold hover:from-green-600 hover:to-green-700 transition transform hover:scale-[1.02] shadow-lg">
                🛒 خرید و پرداخت نهایی
            </button>

        </div>

        <hr class="border border-gray-50">
    </div>


    <!-- stepper -->
    <script>
        let currentStep = 0;

        $('#nextStep').on('click', function () {
            const $steps = $('#stepper .step');
            const $lines = $('#stepper .line');

            if (currentStep < $steps.length) {
                const $circle = $steps.eq(currentStep).find('.circle');
                $circle.removeClass('bg-gray-300').addClass('bg-green-500').html('✔️');

                if (currentStep > 0) {
                    $lines.eq(currentStep - 1).removeClass('bg-gray-300').addClass('bg-green-500');
                }

                currentStep++;
            }
        });
    </script>

