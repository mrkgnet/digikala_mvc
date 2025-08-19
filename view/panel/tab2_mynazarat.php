<div class="hidden p-4 rounded-lg bg-white shadow" id="contacts" role="tabpanel"
     aria-labelledby="contacts-tab">
    <!-- jQuery و Tailwind -->

    <div class=" mt-10 overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded-lg overflow-hidden"
               id="commentsTable">
            <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="px-4 py-2 border-b text-right">ردیف</th>
                <th class="px-4 py-2 border-b text-right">تاریخ</th>
                <th class="px-4 py-2 border-b text-right">کالا</th>
                <th class="px-4 py-2 border-b text-right">می‌پسندم</th>
                <th class="px-4 py-2 border-b text-right">عملیات</th>
            </tr>
            </thead>
            <tbody>
            <tr class="hover:bg-gray-50 transition">
                <td class="px-4 py-2 border-b text-right">1</td>
                <td class="px-4 py-2 border-b text-right">1404/05/10</td>
                <td class="px-4 py-2 border-b text-right">هدفون بی‌سیم</td>
                <td class="px-4 py-2 border-b text-right">12 ❤️</td>
                <td class="px-4 py-2 border-b text-right space-x-2 space-x-reverse">
                    <button class="view-btn text-blue-500 hover:text-blue-700"
                            title="مشاهده">👁
                    </button>
                    <button class="edit-btn text-green-500 hover:text-green-700"
                            title="ویرایش">✏️
                    </button>
                    <button class="delete-btn text-red-500 hover:text-red-700"
                            title="حذف">🗑
                    </button>
                </td>
            </tr>

            <tr class="hover:bg-gray-50 transition">
                <td class="px-4 py-2 border-b text-right">2</td>
                <td class="px-4 py-2 border-b text-right">1404/05/08</td>
                <td class="px-4 py-2 border-b text-right">موس گیمینگ</td>
                <td class="px-4 py-2 border-b text-right">5 ❤️</td>
                <td class="px-4 py-2 border-b text-right space-x-2 space-x-reverse">
                    <button class="view-btn text-blue-500 hover:text-blue-700"
                            title="مشاهده">👁
                    </button>
                    <button class="edit-btn text-green-500 hover:text-green-700"
                            title="ویرایش">✏️
                    </button>
                    <button class="delete-btn text-red-500 hover:text-red-700"
                            title="حذف">🗑
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <script>
        // حذف ردیف با انیمیشن
        $(document).on('click', '.delete-btn', function () {
            $(this).closest('tr').fadeOut(300, function () {
                $(this).remove();
            });
        });
    </script>

</div>

