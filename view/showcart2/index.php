 
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!--main-->
    <div id="main" class="max-w-screen-xl m-auto my-3 ">

        <!-- order steps -->
        <div class="order_steps my-5">
            <div id="stepper" class="flex items-center justify-between bg-white p-6 rounded shadow">
                <div class="step text-center relative circle">


                    <div
                        class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center mx-auto animate-pulse">
                        1
                    </div>
                    <p class="text-sm mt-2">ورود به دیجی کالا </p>
                </div>
                <div class="line flex-1 h-1 mx-2 transition-all bg-green-500">
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


        </div>
        <!-- Tailwind + jQuery -->



        <!-- انتخاب ادرس -->
        <div class="w-full  mx-auto bg-gray-50 p-6 space-y-6 rtl">

            <!-- سطر انتخاب آدرس جدید -->
            <div class="flex items-center justify-between bg-white p-4 rounded-2xl shadow-md">
                <span class="text-lg font-semibold ">انتخاب آدرس جدید</span>


                <!-- دکمه باز کردن مدال -->
                <button id="openModal"
                    class="block cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    انتخاب ادرس جدید
                </button>

                <!-- مدال -->
                <div id="myModal" class="hidden fixed inset-0 z-50  items-center justify-center  bg-opacity-50"
                    style="background-color: #00000054;">
                    <div
                        class="bg-white dark:bg-gray-700 rounded-lg shadow-lg w-full max-w-2xl m-auto mt-5 h-5/6 overflow-y-scroll">

                        <!-- هدر -->
                        <div
                            class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">انتخاب ادرس جدید</h3>
                            <button id="closeModal" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                ✖
                            </button>
                        </div>

                        <!-- بدنه -->

                        <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-lg shadow space-y-4">

                            <!-- نام و نام خانوادگی -->
                            <div>
                                <label class="block  mb-1">نام و نام خانوادگی گیرنده</label>
                                <input type="text"
                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                                    placeholder="مثلاً علی رضایی">
                            </div>

                            <!-- شماره همراه -->
                            <div>
                                <label class="block  mb-1">شماره همراه</label>
                                <input type="tel"
                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                                    placeholder="09xxxxxxxxx">
                            </div>

                            <!-- شماره ثابت -->
                            <div>
                                <label class="block  mb-1">شماره ثابت</label>
                                <input type="tel"
                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                                    placeholder="0xx-xxxxxxx">
                            </div>

                            <!-- استان / شهر -->
                            <!-- استان / شهر -->
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block  mb-1">استان</label>
                                    <select id="province" class="w-full"></select>
                                </div>
                                <div>
                                    <label class="block  mb-1">شهر</label>
                                    <select id="city" class="w-full" disabled></select>
                                </div>
                            </div>


                            <!-- آدرس پستی -->
                            <div>
                                <label class="block  mb-1">آدرس پستی</label>
                                <textarea
                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                                    rows="3" placeholder="خیابان، کوچه، پلاک ..."></textarea>
                            </div>

                            <!-- کد پستی -->
                            <div>
                                <label class="block  mb-1">کد پستی</label>
                                <input type="text"
                                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                                    placeholder="xxxxxxxxxx">
                            </div>

                            
                        </div>


                        <!-- فوتر -->
                        <div
                            class="flex gap-4 justify-end items-center p-4 border-t border-gray-200 dark:border-gray-600 space-x-3 space-x-reverse">

                            <button id="closeModal2"
                                class="py-2.5 cursor-pointer px-5 text-sm font-medium  bg-red-600 text-white border border-gray-200 rounded-lg hover:bg-red-800 hover:text-white  dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">نپذیرفتن</button>
                            <button id="acceptBtn"
                                class="text-white cursor-pointer bg-green-700 hover:bg-blue-800 px-5 py-2.5 rounded-lg text-sm">
                                ثبت اطلاعات
                            </button>
                        </div>

                    </div>
                </div>


            </div>

            <!-- کارت‌های آدرس -->
            <div id="address-container" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- نمونه کارت آدرس (پیش‌فرض انتخاب شده) -->
                <div
                    class="address-card border-2 border-blue-500 bg-blue-50 rounded-2xl p-4 shadow hover:shadow-lg transition cursor-pointer">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg font-bold ">محمدرضا خسروی</h3>
                        <input type="radio" name="address" class="hidden" checked>
                    </div>
                    <p class="text-gray-600"><strong>استان:</strong> تهران</p>
                    <p class="text-gray-600"><strong>شهر:</strong> تهران</p>
                    <p class="text-gray-600"><strong>آدرس:</strong> خیابان آزادی، پلاک ۱۲۳، واحد ۴</p>
                    <p class="text-gray-600"><strong>شماره تماس اضطراری:</strong> 09121234567</p>
                    <p class="text-gray-600 mb-4"><strong>شماره تماس ثابت:</strong> 02112345678</p>

                    <div class="flex justify-between mt-2">
                        <button
                            class="edit-btn px-4 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg transition">ویرایش</button>
                        <button
                            class="delete-btn px-4 py-1 bg-red-500 hover:bg-red-600 text-white rounded-lg transition">حذف</button>
                    </div>
                </div>

                <div
                    class="address-card border-2 border-gray-200 rounded-2xl  p-4 shadow hover:shadow-lg transition cursor-pointer">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg font-bold ">علی احمدی</h3>
                        <input type="radio" name="address" class="hidden">
                    </div>
                    <p class="text-gray-600"><strong>استان:</strong> اصفهان</p>
                    <p class="text-gray-600"><strong>شهر:</strong> کاشان</p>
                    <p class="text-gray-600"><strong>آدرس:</strong> خیابان امیرکبیر، پلاک ۲۵</p>
                    <p class="text-gray-600"><strong>شماره تماس اضطراری:</strong> 09351234567</p>
                    <p class="text-gray-600 mb-4"><strong>شماره تماس ثابت:</strong> 03112345678</p>

                    <div class="flex justify-between mt-2">
                        <button
                            class="edit-btn px-4 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg transition">ویرایش</button>
                        <button
                            class="delete-btn px-4 py-1 bg-red-500 hover:bg-red-600 text-white rounded-lg transition">حذف</button>
                    </div>
                </div>

            </div>
        </div>



        <!-- شیوه های ارسال کالا  -->

        <style>
            .send_product #shipping-options>div.active {
                background-color: rgb(49 49 198 / 7%);
            }
        </style>

        <div class="w-full mx-auto send_product bg-gray-50 p-6 rounded-2xl space-y-4 rtl">

            <h2 class="text-xl font-bold text-gray-800 mb-4">شیوه‌های ارسال کالا</h2>

            <div id="shipping-options" class="space-y-3">

                <!-- روش ارسال نمونه 1 -->
                <div
                    class="shipping-option flex  items-center justify-between p-4 border rounded-2xl bg-white shadow-sm cursor-pointer transition hover:shadow-md">
                    <div class="flex gap-3  items-center space-x-3 space-x-reverse">
                        <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" class="w-10 h-10" alt="post">
                        <div>
                            <div class="font-semibold ">پست پیشتاز</div>
                            <div class="text-sm text-gray-500">تحویل ۲ تا ۳ روز کاری</div>
                        </div>
                    </div>
                    <div class=" font-semibold">
                        ۵۰,۰۰۰ تومان
                    </div>
                </div>

                <!-- روش ارسال نمونه 2 -->
                <div
                    class="shipping-option  flex items-center justify-between p-4 border rounded-2xl bg-white shadow-sm cursor-pointer transition hover:shadow-md">
                    <div class="flex  gap-3  items-center space-x-3 space-x-reverse">
                        <img src="https://cdn-icons-png.flaticon.com/512/1048/1048313.png" class="w-10 h-10"
                            alt="motor">
                        <div>
                            <div class="font-semibold ">پیک موتوری</div>
                            <div class="text-sm text-gray-500">ویژه شهر تهران - تحویل همان روز</div>
                        </div>
                    </div>
                    <div class=" font-semibold">
                        ۷۰,۰۰۰ تومان
                    </div>
                </div>

                <!-- روش ارسال نمونه 3 -->
                <div
                    class="shipping-option flex items-center justify-between p-4 border rounded-2xl bg-white shadow-sm cursor-pointer transition hover:shadow-md">
                    <div class="flex gap-3  items-center space-x-3 space-x-reverse">
                        <img src="https://cdn-icons-png.flaticon.com/512/1059/1059183.png" class="w-10 h-10"
                            alt="freight">
                        <div>
                            <div class="font-semibold ">باربری</div>
                            <div class="text-sm text-gray-500">برای شهرستان‌ها - تحویل ۳ تا ۵ روز</div>
                        </div>
                    </div>
                    <div class=" font-semibold">
                        ۱۲۰,۰۰۰ تومان
                    </div>
                </div>

            </div>

        </div>



            <div class="  text-left mt-8 px-4 my-2.5 ">
                <button id="nextStep"
                    class="bg-blue-600 cursor-pointer text-white px-6 py-2 rounded hover:bg-blue-700 transition">مرحله
                    بعد</button>
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

    <!-- اسکریپت انتخاب ادرس -->
    <script>
        $(document).ready(function () {

            // انتخاب کارت آدرس
            $(".address-card").click(function (e) {
                if ($(e.target).closest("button").length) return;

                $(".address-card").removeClass("border-blue-500 bg-blue-50").addClass("border-gray-200");
                $(".address-card input[type='radio']").prop("checked", false);

                $(this).removeClass("border-gray-200").addClass("border-blue-500 bg-blue-50");
                $(this).find("input[type='radio']").prop("checked", true);
            });

            // حذف کارت آدرس با تایید و انیمیشن محو شدن
            $(".delete-btn").click(function (e) {
                e.stopPropagation();
                const card = $(this).closest(".address-card");
                const name = card.find("h3").text();

                if (confirm(`آیا مطمئن هستید که می‌خواهید آدرس "${name}" را حذف کنید؟`)) {
                    card.fadeOut(400, function () {
                        $(this).remove();
                    });
                }
            });
        });
    </script>

    <!-- اسکریپت شیوه های ارسال کالا  -->
    <script>
        $(document).ready(function () {
            $(".shipping-option").click(function () {
                $(".shipping-option").removeClass("border-blue-500 bg-blue-100 active");
                $(this).addClass("border-blue-500 bg-blue-100 active");
            });
        });
    </script>

    <!-- اسکریپت مدال -->
    <script>
        // باز کردن مدال
        $("#openModal").on("click", function () {
            $("#myModal").fadeIn(200);
        });

        // بستن مدال
        $("#closeModal, #closeModal2").on("click", function () {
            $("#myModal").fadeOut(200);
        });

        // بستن مدال با کلیک روی پس‌زمینه تار
        $("#myModal").on("click", function (e) {
            if (e.target.id === "myModal") {
                $(this).fadeOut(200);
            }
        });

        // دکمه Accept
        $("#acceptBtn").on("click", function () {
            alert("Accepted!");
            $("#myModal").fadeOut(200);
        });
    </script>

    <!-- اسکریپت شهر و استان -->
    <script>
        const provincesData = {
            "آذربایجان شرقی": [
                "تبریز", "مراغه", "مرند", "اهر", "میانه", "بناب", "سراب", "ملکان", "شبستر", "هریس", "کلیبر", "اسکو", "جلفا", "ورزقان", "عجب‌شیر", "هشترود", "چار اویماق"
            ],
            "آذربایجان غربی": [
                "ارومیه", "خوی", "میاندوآب", "بوکان", "سلماس", "مهاباد", "پیرانشهر", "نقده", "شاهین‌دژ", "سردشت", "اشنویه", "چالدران", "تکاب", "شوط"
            ],
            "اردبیل": [
                "اردبیل", "پارس‌آباد", "مشگین‌شهر", "خلخال", "بیله‌سوار", "نمین", "گرمی", "سرعین", "نیر", "کوثر", "اصلاندوز"
            ],
            "اصفهان": [
                "اصفهان", "کاشان", "خمینی‌شهر", "نجف‌آباد", "شاهین‌شهر", "زرین‌شهر", "فولادشهر", "گلپایگان", "آران‌وبیدگل", "نایین", "نطنز", "شهرضا", "علویجه", "فریدون‌شهر", "خوانسار"
            ],
            "البرز": [
                "کرج", "نظرآباد", "هشتگرد", "طالقان", "اشتهارد", "ماهدشت", "محمدشهر", "مشکین‌دشت"
            ],
            "ایلام": [
                "ایلام", "دهلران", "آبدانان", "مهران", "ایوان", "دره‌شهر", "چرداول", "ملکشاهی", "بدره"
            ],
            "بوشهر": [
                "بوشهر", "کنگان", "گناوه", "دیر", "جم", "دیلم", "دشتی", "تنگستان", "عسلویه"
            ],
            "تهران": [
                "تهران", "ری", "شمیرانات", "اسلامشهر", "شهریار", "ورامین",
                "ملارد", "قدس", "چهاردانگه", "باقرشهر", "حسن‌آباد", "کهریزک", "رباط‌کریم", "پرند", "پاکدشت", "قرچک", "بومهن", "پردیس", "دماوند", "فیروزکوه"
            ],
            "چهارمحال و بختیاری": [
                "شهرکرد", "بروجن", "فارسان", "لردگان", "سامان", "بن", "کیان", "گندمان", "پردنجان", "صمصامی", "فرادبنه", "دشتک", "بلداجی", "هفشجان", "نقنه", "آلونی", "باباحیدر", "شلمزار", "سورشجان", "طاقانک", "جونقان"
            ],
            "خراسان جنوبی": [
                "بیرجند", "فردوس", "طبس", "قاین", "نهبندان", "سرایان", "خوسف", "درمیان", "زهان", "آیسک", "اسلامیه"
            ],
            "خراسان رضوی": [
                "مشهد", "نیشابور", "سبزوار", "قوچان", "تربت‌حیدریه",
                "کاشمر", "چناران", "طرقبه شاندیز", "سرخس", "بردسکن", "تربت‌جام", "درگز", "خواف", "رشتخوار", "فیروزه", "کلات", "مه‌ولات", "باخرز", "جوین", "جغتای", "زاوه", "بینالود", "احمدآباد"
            ],
            "خراسان شمالی": [
                "بجنورد", "شیروان", "اسفراین", "مانه‌وسملقان", "فاروج", "گرمه", "جاجرم", "رازوجرگلان"
            ],
            "خوزستان": [
                "اهواز", "آبادان", "خرمشهر", "ماهشهر", "شوشتر", "دزفول", "شوش", "ایذه", "بهبهان", "رامهرمز", "مسجدسلیمان", "اندیمشک", "رامشیر", "شادگان", "کارون", "باوی", "حمیدیه", "گتوند", "لالی", "هندیجان", "امیدیه", "هویزه"
            ],
            "زنجان": [
                "زنجان", "ابهر", "خرمدره", "سلطانیه", "طارم", "ماه‌نشان", "ایجرود", "دندی"
            ],
            "سمنان": [
                "سمنان", "شاهرود", "دامغان", "گرمسار", "مهدی‌شهر", "میامی", "سرخه", "آرادان"
            ],
            "سیستان و بلوچستان": [
                "زاهدان", "چابهار", "ایرانشهر", "سراوان", "خاش", "نیک‌شهر", "کنارک", "زهک", "هیرمند", "فنوج", "قصرقند", "سرباز", "میرجاوه", "دلگان", "محمدآباد", "راسک", "بمپور"
            ],
            "فارس": [
                "شیراز", "مرودشت", "کازرون", "لار", "فسا", "جهرم",
                "لامرد", "گراش", "استهبان", "اقلید", "آباده", "داراب", "زرین‌دشت", "سروستان", "ممسنی", "سپیدان", "خرامه", "کوار", "فراشبند", "ارسنجان"
            ],
            "قزوین": [
                "قزوین", "البرز", "آبیک", "بوئین‌زهرا", "تاکستان", "محمدیه", "محمودآباد نمونه"
            ],
            "قم": ["قم"],
            "کردستان": [
                "سنندج", "سقز", "بانه", "مریوان", "قروه", "بیجار", "دهگلان", "دیواندره", "کامیاران", "زرینه"
            ],
            "کرمان": [
                "کرمان", "سیرجان", "رفسنجان", "جیرفت", "بم", "زرند", "کهنوج", "بردسیر", "عنبرآباد", "ریگان", "منوجان", "بافت", "راور", "ارزوئیه", "فهرج", "قلعه گنج", "رابر"
            ],
            "کرمانشاه": [
                "کرمانشاه", "اسلام‌آباد غرب", "سنقر", "هرسین", "صحنه", "کنگاور", "سرپل ذهاب", "گیلانغرب", "قصر شیرین", "پاوه", "جوانرود", "روانسر"
            ],
            "کهگیلویه و بویراحمد": [
                "یاسوج", "دوگنبدان", "دهدشت", "لیکک", "چرام", "باشت", "لنده", "سی‌سخت"
            ],
            "گلستان": [
                "گرگان", "گنبد کاووس", "علی‌آباد", "آق‌قلا", "مینودشت", "کلاله", "رامیان", "آزادشهر", "کردکوی", "بندر ترکمن", "بندر گز", "گمیشان", "مراوه‌تپه", "اینچه‌برون"
            ],
            "گیلان": [
                "رشت", "انزلی", "لاهیجان", "لنگرود", "آستارا",
                "تالش", "صومعه‌سرا", "فومن", "رودسر", "ماسال", "آستانه اشرفیه", "رودبار", "رضوانشهر", "شفت", "املش", "خشکبیجار", "لولمان"
            ],
            "لرستان": [
                "خرم‌آباد", "بروجرد", "دورود", "الیگودرز", "کوهدشت", "نورآباد", "ازنا", "پلدختر", "الشتر", "سراب‌دوره"
            ],
            "مازندران": [
                "ساری", "آمل", "بابل", "قائم‌شهر", "نوشهر",
                "چالوس", "رامسر", "تنکابن", "بابلسر", "جویبار", "محمودآباد", "نور", "فریدون‌کنار", "نکا", "بهشهر", "سیمرغ", "سوادکوه", "کلاردشت", "میاندرود", "عباس‌آباد", "سوادکوه شمالی"
            ],
            "مرکزی": [
                "اراک", "ساوه", "خمین", "محلات", "شازند", "دلیجان", "تفرش", "کمیجان", "خنداب", "آشتیان", "فرمهین"
            ],
            "هرمزگان": [
                "بندرعباس", "قشم", "کیش", "میناب", "بندرلنگه", "حاجی‌آباد", "جاسک", "پارسیان", "بستک", "سیریک", "خمیر", "رودان"
            ],
            "همدان": [
                "همدان", "ملایر", "نهاوند", "کبودرآهنگ", "رزن", "تویسرکان", "بهار", "اسدآباد", "فامنین"
            ],
            "یزد": [
                "یزد", "میبد", "اردکان", "ابرکوه", "بافق", "مهریز", "اشکذر", "خاتم", "تفت"
            ]
        };

        $(document).ready(function () {
            const $province = $("#province");
            const $city = $("#city");

            // پر کردن استان‌ها
            $province.append('<option value="">انتخاب استان</option>');
            Object.keys(provincesData).forEach(prov => {
                $province.append(`<option value="${prov}">${prov}</option>`);
            });

            // فعال‌سازی Select2
            $province.select2({ width: '100%', dir: 'rtl', placeholder: 'انتخاب استان', allowClear: true });
            $city.select2({ width: '100%', dir: 'rtl', placeholder: 'انتخاب شهر', allowClear: true });

            // تغییر استان → لود شهرها
            $province.on("change", function () {
                const province = $(this).val();
                $city.empty();

                if (province && provincesData[province]) {
                    $city.append('<option value="">انتخاب شهر</option>');
                    provincesData[province].forEach(city => {
                        $city.append(`<option value="${city}">${city}</option>`);
                    });
                    $city.prop('disabled', false).trigger('change.select2');
                } else {
                    $city.append('<option value="">ابتدا استان را انتخاب کنید</option>');
                    $city.prop('disabled', true).trigger('change.select2');
                }
            });
        });
    </script>
</body>

</html>