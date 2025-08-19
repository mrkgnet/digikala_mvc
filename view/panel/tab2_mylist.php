<div class="hidden p-4 rounded-lg bg-white shadow" id="settings" role="tabpanel"
     aria-labelledby="settings-tab">

    <!-- افزودن پوشه  -->
    <div>


        <div class=" mt-10 p-4 border rounded-lg shadow bg-white">
            <h2 class="text-lg font-bold mb-4">📂 پوشه‌های مورد علاقه</h2>

            <!-- پوشه‌ها افقی -->
            <div id="foldersWrapper" class="flex space-x-2 space-x-reverse overflow-x-auto pb-2">
                <div class="folder-item flex items-center space-x-1 space-x-reverse px-3 py-1 border rounded bg-blue-100 cursor-pointer"
                     data-info="این پوشه پیش‌فرض است" data-img="https://via.placeholder.com/80">
                    <span>📁</span><span class="folder-name">پوشه پیش‌فرض</span>
                    <button class="edit-folder text-blue-500 hover:text-blue-700 ml-1">✏️</button>
                    <button class="delete-folder text-red-500 hover:text-red-700">🗑</button>
                </div>
            </div>

            <!-- افزودن پوشه جدید -->
            <div class="flex items-center space-x-2 space-x-reverse mt-4">
                <input type="text" id="newFolder" placeholder="نام پوشه جدید..."
                       class=" border rounded px-2 py-1 focus:ring focus:ring-blue-200 text-sm">
                <button id="addFolder"
                        class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">➕
                    افزودن
                </button>
            </div>

            <!-- باکس اطلاعات پوشه -->
            <div id="folderInfo"
                 class="mt-4 p-4 border rounded bg-gray-50 flex items-center space-x-4 space-x-reverse">
                <img id="folderImg" src="https://via.placeholder.com/80"
                     class="w-20 h-20 rounded border" alt="عکس پوشه">
                <p id="folderText" class="text-gray-700 flex-1 text-right">پوشه پیش‌فرض : این پوشه
                    پیش‌فرض
                    است</p>
            </div>
        </div>

        <script>
            // افزودن پوشه جدید
            $('#addFolder').on('click', function () {
                const folderName = $('#newFolder').val().trim();
                if (folderName) {
                    $('#foldersWrapper').append(`
                                <div class="folder-item flex items-center space-x-1 space-x-reverse px-3 py-1 border rounded bg-gray-100 cursor-pointer"
                                    data-info="توضیحات برای ${folderName}" data-img="https://via.placeholder.com/80/cccccc">
                                <span>📁</span><span class="folder-name">${folderName}</span>
                                <button class="edit-folder text-blue-500 hover:text-blue-700 ml-1">✏️</button>
                                <button class="delete-folder text-red-500 hover:text-red-700">🗑</button>
                                </div>
      `);
                    $('#newFolder').val('');
                }
            });

            // کلیک روی پوشه‌ها برای نمایش اطلاعات
            $(document).on('click', '.folder-item', function () {
                $('.folder-item').removeClass('bg-blue-100').addClass('bg-gray-100');
                $(this).removeClass('bg-gray-100').addClass('bg-blue-100');

                const folderName = $(this).find('.folder-name').text();
                const folderInfo = $(this).data('info') || 'اطلاعاتی ثبت نشده است';
                const folderImg = $(this).data('img') || 'https://via.placeholder.com/80';

                $('#folderText').text(`${folderName} : ${folderInfo}`);
                $('#folderImg').attr('src', folderImg);
                $('#folderInfo').slideDown(200);
            });

            // حذف پوشه
            $(document).on('click', '.delete-folder', function (e) {
                e.stopPropagation();
                $(this).closest('.folder-item').remove();
                $('#folderInfo').slideUp(200);
            });

            // ویرایش پوشه
            $(document).on('click', '.edit-folder', function (e) {
                e.stopPropagation();
                const $folder = $(this).closest('.folder-item');
                const $nameSpan = $folder.find('.folder-name');
                const currentName = $nameSpan.text();
                const newName = prompt('نام جدید پوشه را وارد کنید:', currentName);
                if (newName && newName.trim() !== '') {
                    $nameSpan.text(newName.trim());
                    if ($('#folderText').text().startsWith(currentName)) {
                        $('#folderText').text(`${newName.trim()} : ${$folder.data('info')}`);
                    }
                }
            });
        </script>
    </div>


    <!-- لیست علاقه مندی ها  -->
    <div>
        <div class=" mt-10 space-y-4" id="wishlist">

            <!-- کارت محصول -->
            <div
                    class="wishlist-card flex items-center justify-between bg-white border rounded-lg shadow p-3 hover:shadow-lg transition">

                <!-- عکس سمت راست -->
                <img src="https://via.placeholder.com/80"
                     class="w-20 h-20 rounded-lg border object-cover" alt="عکس محصول">

                <!-- توضیحات وسط -->
                <div class="flex-1 px-4 text-right">
                    <h3 class="text-gray-800 font-bold">عنوان محصول</h3>
                    <p class="text-gray-500 text-sm mt-1">این یک توضیح کوتاه درباره محصول است.</p>
                </div>

                <!-- دکمه حذف سمت چپ -->
                <button
                        class="delete-btn bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg transition">
                    🗑 حذف
                </button>

            </div>

            <!-- کارت دوم تستی -->
            <div
                    class="wishlist-card flex items-center justify-between bg-white border rounded-lg shadow p-3 hover:shadow-lg transition">
                <img src="https://via.placeholder.com/80/ff0000"
                     class="w-20 h-20 rounded-lg border object-cover" alt="عکس محصول">
                <div class="flex-1 px-4 text-right">
                    <h3 class="text-gray-800 font-bold">محصول دوم</h3>
                    <p class="text-gray-500 text-sm mt-1">توضیح کوتاه دیگری درباره محصول دوم.</p>
                </div>
                <button
                        class="delete-btn bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg transition">
                    🗑 حذف
                </button>
            </div>

        </div>

        <script>
            // حذف کارت با انیمیشن
            $(document).on('click', '.delete-btn', function () {
                $(this).closest('.wishlist-card').slideUp(200, function () {
                    $(this).remove();
                });
            });
        </script>
    </div>

</div>

