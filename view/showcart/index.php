

    <!--main-->
    <div id="main" class="max-w-screen-xl m-auto  mt-4 ">
       

        <div class="w-full min-h-screen  p-6 rtl space-y-6">
            <!-- هدر سبد خرید -->
            <div class="flex items-center justify-between bg-white p-4 rounded-2xl shadow-md">
                <h2 class="text-xl font-bold text-gray-700">سبد خرید شما در دیجی‌کالا</h2>
                <button class="px-6 py-2 bg-green-600 hover:bg-green-600 text-white font-medium  transition">
                    نهایی کردن خرید
                </button>
            </div>

            <!-- جدول محصولات -->
            <div class="overflow-x-auto bg-white rounded-2xl shadow-md">
                <table class="w-full text-center border-collapse">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-3">شرح محصول</th>
                            <th class="p-3">تعداد</th>
                            <th class="p-3">قیمت واحد</th>
                            <th class="p-3">قیمت کل</th>
                            <th class="p-3">وضعیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- نمونه محصول -->
                        <tr class="border-t hover:bg-gray-50 transition">
                            <td class="p-3 flex items-center gap-3 justify-center">
                                <img src="public/images/schwan-903-steering-wheel-lock.jpg" alt="product"
                                    class="rounded-lg border-0 w-16">
                                <span class="text-gray-700">گوشی موبایل سامسونگ</span>
                            </td>
                            <!-- تعداد با + و - -->
                            <td class="p-3">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="minus px-3 py-1 bg-red-500 text-white rounded-lg">-</button>
                                    <input type="text" value="1" class="count w-12 text-center border rounded-lg"
                                        readonly>
                                    <button class="plus px-3 py-1 bg-green-500 text-white rounded-lg">+</button>
                                </div>
                            </td>
                            <td class="p-3 text-gray-700 unit-price" data-price="15000000">15,000,000 تومان</td>
                            <td class="p-3 text-gray-800 font-semibold total-price">15,000,000 تومان</td>
                            <td class="p-3">
                                <button
                                    class="delete-product px-4 py-1 bg-red-500 hover:bg-red-600 text-white rounded-lg transition">
                                    حذف محصول
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- جمع کل خرید -->


            <div class="final_price  bg-white rounded-2xl shadow-md p-6 max-w-md ms-auto space-y-4">
                <div class="flex justify-between text-gray-700 text-lg font-medium">
                    <span>جمع کل خرید:</span>
                    <span id="total-price">15,000,000 تومان</span>
                </div>
                <div class="flex justify-between text-gray-700 text-lg font-medium">
                    <span>مبلغ قابل پرداخت:</span>
                    <span id="payable-price">15,000,000 تومان</span>
                </div>
                <button class="w-full py-3 bg-green-600 hover:bg-green-600 text-white  shadow-md transition">
                    خرید خود را نهایی کنید
                </button>
            </div>


        </div>


        <!-- اسکریپت کم و زیاد کردن محصول و حذف محصول  -->
        <script>
            function formatPrice(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " تومان";
            }

            function updateTotal() {
                let total = 0;
                $("tbody tr").each(function () {
                    const count = parseInt($(this).find(".count").val()) || 0;
                    const unitPrice = parseInt($(this).find(".unit-price").data("price")) || 0;
                    const rowTotal = count * unitPrice;
                    $(this).find(".total-price").text(formatPrice(rowTotal));
                    total += rowTotal;
                });
                $("#total-price, #payable-price").text(formatPrice(total));
            }

            $(document).ready(function () {
                $(".plus").click(function () {
                    let input = $(this).siblings(".count");
                    let value = parseInt(input.val()) || 0;
                    input.val(value + 1);
                    updateTotal();
                });

                $(".minus").click(function () {
                    let input = $(this).siblings(".count");
                    let value = parseInt(input.val()) || 0;
                    if (value > 1) input.val(value - 1);
                    updateTotal();
                });

                $(".delete-product").click(function () {
                    const row = $(this).closest("tr");
                    const productName = row.find("span").text();

                    if (confirm(`آیا مطمئن هستید که می‌خواهید «${productName}» را حذف کنید؟`)) {
                        row.remove();
                        updateTotal();
                    }
                });
            });
        </script>

    </div>



