<div class="hidden p-4 rounded-lg bg-white shadow" id="digibon" role="tabpanel"
     aria-labelledby="contacts-tab">
    <!-- jQuery و Tailwind -->

    <!-- add digibon -->
    <div
            class="w-full flex items-center justify-start  gap-4 p-6 bg-white shadow-md border border-gray-200 rtl">
        <!-- متن -->
        <span class="text-lg font-semibold text-gray-700 whitespace-nowrap">
                            کد دریافت دیجی‌بن
                        </span>

        <!-- اینپوت خوشگل -->
        <input type="text" placeholder="کد خود را وارد کنید"
               class=" px-4 py-2  cursor-pointer border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 transition"/>

        <!-- دکمه ثبت اطلاعات -->
        <button
                class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-xl shadow-md transition whitespace-nowrap">
            ثبت اطلاعات
        </button>
    </div>


    <!-- جدول -->
    <div class="overflow-x-auto  shadow mt-6">
        <table class="min-w-full text-sm text-right text-gray-700 bg-white border border-gray-300">
            <thead class="bg-gray-500  text-white font-bold">
            <tr>
                <th class="px-4 py-3">ردیف</th>
                <th class="px-4 py-3">کد</th>
                <th class="px-4 py-3">سفارش</th>
                <th class="px-4 py-3">شرح</th>
                <th class="px-4 py-3">تاریخ ثبت</th>
                <th class="px-4 py-3">تاریخ انقضا</th>
                <th class="px-4 py-3">اعتبار اولیه</th>
                <th class="px-4 py-3">اعتبار مصرفی</th>
                <th class="px-4 py-3">مانده</th>
                <th class="px-4 py-3">وضعیت</th>
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
                    <td class="px-4 py-3">آنلاین</td>
                    <td class="px-4 py-3">آنلاین</td>
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
                    <td colspan="11" class="p-4 bg-gray-50">
                        <div class=" rounded-lg p-4">
                            <link
                                    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
                                    rel="stylesheet">

                            <div class=" mt-5 overflow-x-auto">
                                <table
                                        class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden text-sm">
                                    <thead class="bg-gray-100 text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-right">سفارش</th>
                                        <th class="px-4 py-2 border-b text-right">نوع</th>
                                        <th class="px-4 py-2 border-b text-right">تاریخ</th>
                                        <th class="px-4 py-2 border-b text-right">اعتبار مصرفی
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-2 border-b text-right">#12345</td>
                                        <td class="px-4 py-2 border-b text-right">خرید محصول
                                        </td>
                                        <td class="px-4 py-2 border-b text-right">1404/05/10
                                        </td>
                                        <td class="px-4 py-2 border-b text-right">50,000 تومان
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-2 border-b text-right">#12346</td>
                                        <td class="px-4 py-2 border-b text-right">تمدید اشتراک
                                        </td>
                                        <td class="px-4 py-2 border-b text-right">1404/05/09
                                        </td>
                                        <td class="px-4 py-2 border-b text-right">25,000 تومان
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-2 border-b text-right">#12347</td>
                                        <td class="px-4 py-2 border-b text-right">خرید شارژ</td>
                                        <td class="px-4 py-2 border-b text-right">1404/05/08
                                        </td>
                                        <td class="px-4 py-2 border-b text-right">10,000 تومان
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-2 text-right">#12348</td>
                                        <td class="px-4 py-2 text-right">خرید دوره آموزشی</td>
                                        <td class="px-4 py-2 text-right">1404/05/07</td>
                                        <td class="px-4 py-2 text-right">80,000 تومان</td>
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
