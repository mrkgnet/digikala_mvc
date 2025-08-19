<!--main-->
<div id="main" class="max-w-screen-xl m-auto my-3 ">

    <!-- order steps -->
    <div class="order_steps my-5">
        <div id="stepper" class="flex items-center justify-between bg-white p-6 rounded shadow">
            <div class="step text-center relative">
                <div
                    class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                    1</div>
                <p class="text-sm mt-2">ورود به دیجی کالا </p>
            </div>
            <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
            </div>
            <div class="step text-center relative">
                <div
                    class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                    2</div>
                <p class="text-sm mt-2">اطلاعات ارسال سفارش</p>
            </div>
            <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
            </div>
            <div class="step text-center relative">
                <div
                    class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                    3</div>
                <p class="text-sm mt-2"> بازبینی سفارش </p>
            </div>
            <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
            </div>
            <div class="step text-center relative">
                <div
                    class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                    3</div>
                <p class="text-sm mt-2"> اطلاعات پرداخت </p>
            </div>
            <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
            </div>

        </div>

        <div class="text-center mt-8">
            <button id="nextStep" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">مرحله
                بعد</button>
        </div>


        <!-- script order steps -->

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

    </div>



    <!-- login and signup -->
    <div
        class="w-full my-8 max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2 rtl">

        <!-- ستون راست: کاربران عضو -->
        <div class="flex flex-col justify-center items-center p-8 bg-gray-50">
            <!-- آیکون قفل -->
            <div class="w-16 h-16 mb-4 flex items-center justify-center bg-yellow-100 text-yellow-500 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c1.104 0 2-.896 2-2V7a4 4 0 10-8 0v2c0 1.104.896 2 2 2zM5 11h14v9H5z" />
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">عضو دیجی‌کالا هستید؟</h2>
            <p class="text-gray-600 text-center mb-6">
                برای تکمیل فرایند خرید وارد شوید
            </p>
            <button class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-xl shadow transition">
                ورود به دیجی‌کالا
            </button>
        </div>

        <!-- ستون چپ: کاربران تازه وارد -->
        <div class="flex flex-col justify-center items-center p-8 bg-white">
            <!-- آیکون + -->
            <div class="w-16 h-16 mb-4 flex items-center justify-center bg-green-100 text-green-500 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>
            <h2 class="text-xl font-bold text-gray-800 mb-2">تازه وارد هستید؟</h2>
            <p class="text-gray-600 text-center mb-6">
                برای تکمیل فرایند خرید ثبت‌نام کنید
            </p>
            <button
                class="px-6 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded-xl shadow transition">
                ثبت‌نام در دیجی‌کالا
            </button>
        </div>
    </div>


    <hr class="border border-gray-50">

</div>

