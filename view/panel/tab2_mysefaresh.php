<div class="hidden p-4 rounded-lg bg-white shadow" id="dashboard" role="tabpanel"
     aria-labelledby="dashboard-tab">

    <!-- جدول -->
    <div class="overflow-x-auto  shadow mt-6">
        <table class="min-w-full text-sm text-right text-gray-700 bg-white border border-gray-300">
            <thead class="bg-gray-500  text-white font-bold">
            <tr>
                <th class="px-4 py-3">ردیف</th>
                <th class="px-4 py-3">کد</th>
                <th class="px-4 py-3">تاریخ</th>
                <th class="px-4 py-3">مبلغ</th>
                <th class="px-4 py-3">وضعیت</th>
                <th class="px-4 py-3">عملیات پرداخت</th>
                <th class="px-4 py-3">نوع</th>
                <th class="px-4 py-3">جزئیات</th>
            </tr>
            </thead>
            <tbody>
            <div>
                <!-- ردیف اصلی -->
                <tr class="border-t">
                    <td class="px-4 py-3">1</td>
                    <td class="px-4 py-3">#A203</td>
                    <td class="px-4 py-3">1403/05/10</td>
                    <td class="px-4 py-3">1,250,000</td>
                    <td class="px-4 py-3 text-green-600">موفق</td>
                    <td class="px-4 py-3">کارت به کارت</td>
                    <td class="px-4 py-3">آنلاین</td>
                    <td class="px-4 py-3">
                        <button class=" flex gap-2  toggle-details cursor-pointer">
                            <span>جزئیات</span>
                            <i class="bi bi-caret-down-square-fill"></i>
                        </button>
                    </td>
                </tr>

                <!-- ردیف جزئیات -->
                <tr class="details-row hidden">
                    <td colspan="8" class="p-4 bg-gray-50">
                        <div class=" rounded-lg p-4">


                            <!-- یه عنوان به خط سمت راست و چپش  -->
                            <div class="flex items-center justify-center my-10">
                                <div class="flex items-center w-full max-w-2xl px-4">

                                    <!-- خط سمت راست -->
                                    <div class="flex-grow h-px bg-gray-300"></div>

                                    <!-- متن وسط -->
                                    <span
                                        class="mx-4 text-lg font-semibold text-gray-700 whitespace-nowrap">
                                                            جزئیات سفارش
                                                        </span>

                                    <!-- خط سمت چپ -->
                                    <div class="flex-grow h-px bg-gray-300"></div>

                                </div>
                            </div>
                            <div class="overflow-x-auto rounded-lg shadow mt-6">
                                <table
                                    class="min-w-full text-sm text-right text-gray-700 bg-white border">
                                    <thead class="bg-gray-600 text-white font-bold">
                                    <tr>
                                        <th class="px-4 py-3">کالا</th>
                                        <th class="px-4 py-3">تعداد</th>
                                        <th class="px-4 py-3">قیمت واحد</th>
                                        <th class="px-4 py-3">قیمت کل</th>
                                        <th class="px-4 py-3">تخفیف کل</th>
                                        <th class="px-4 py-3">مبلغ کل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t">
                                        <td class="px-4 py-2">کفش ورزشی</td>
                                        <td class="px-4 py-2">2</td>
                                        <td class="px-4 py-2">800,000</td>
                                        <td class="px-4 py-2">1,600,000</td>
                                        <td class="px-4 py-2 text-red-600">100,000</td>
                                        <td class="px-4 py-2 text-green-600">1,500,000</td>
                                    </tr>
                                    <!-- ردیف‌های دیگر در صورت نیاز -->
                                    </tbody>
                                </table>
                            </div>

                            <!-- یه عنوان به خط سمت راست و چپش  -->
                            <div class="flex items-center justify-center my-10">
                                <div class="flex items-center w-full max-w-2xl px-4">

                                    <!-- خط سمت راست -->
                                    <div class="flex-grow h-px bg-gray-300"></div>

                                    <!-- متن وسط -->
                                    <span
                                        class="mx-4 text-lg font-semibold text-gray-700 whitespace-nowrap">
                                                            رهگیری سفارش
                                                        </span>

                                    <!-- خط سمت چپ -->
                                    <div class="flex-grow h-px bg-gray-300"></div>

                                </div>
                            </div>


                            <!-- order steps -->
                            <div class="order_steps my-5">
                                <div id="stepper"
                                     class="flex items-center justify-between bg-white p-6 rounded shadow">
                                    <div class="step text-center relative">
                                        <div
                                            class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                                            1
                                        </div>
                                        <p class="text-sm mt-2">تایید سفارش</p>
                                    </div>
                                    <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
                                    </div>
                                    <div class="step text-center relative">
                                        <div
                                            class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                                            2
                                        </div>
                                        <p class="text-sm mt-2">پرداخت</p>
                                    </div>
                                    <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
                                    </div>
                                    <div class="step text-center relative">
                                        <div
                                            class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                                            3
                                        </div>
                                        <p class="text-sm mt-2">پردازش انبار</p>
                                    </div>
                                    <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
                                    </div>
                                    <div class="step text-center relative">
                                        <div
                                            class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                                            3
                                        </div>
                                        <p class="text-sm mt-2">تحویل انبار</p>
                                    </div>
                                    <div class="line flex-1 h-1 bg-gray-300 mx-2 transition-all">
                                    </div>
                                    <div class="step text-center relative">
                                        <div
                                            class="circle w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center mx-auto transition-all">
                                            4
                                        </div>
                                        <p class="text-sm mt-2">آماده ارسال</p>
                                    </div>
                                </div>

                                <div class="text-center mt-8">
                                    <button id="nextStep"
                                            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                                        مرحله
                                        بعد
                                    </button>
                                </div>

                            </div>

                            <!-- sub order -->
                            <div class="overflow-x-auto mt-8">
                                <table
                                    class="min-w-full table-fixed border border-gray-300 bg-white text-sm text-gray-800">
                                    <thead class="bg-gray-100">
                                    <tr>
                                        <th
                                            class="w-1/3 px-4 py-2 text-right border-l border-b">
                                            ستون اول
                                        </th>
                                        <th
                                            class="w-1/3 px-4 py-2 text-right border-l border-b">
                                            ستون دوم
                                        </th>
                                        <th class="w-1/3 px-4 py-2 text-right border-b">ستون سوم
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-2 text-right border-l border-b">مقدار
                                            ۱
                                        </td>
                                        <td class="px-4 py-2 text-right border-l border-b">مقدار
                                            ۲
                                        </td>
                                        <td class="px-4 py-2 text-right border-b">مقدار ۳</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </td>
                </tr>
            </div>


            </tbody>
        </table>
    </div>


</div>
