<div>
    <!-- کانتینر تب -->
    <div class="">
        <!-- هدر تب‌ها -->
        <ul id="tabs" class="flex flex-wrap border-b border-gray-300 text-sm font-semibold text-gray-500 bg-white">
            <li
                class="tab-btn flex items-center gap-1 px-4 py-4 cursor-pointer hover:text-blue-600 transition border-b-2 border-transparent active-tab">
                <i data-lucide="file-text" class="w-4 h-4"></i> نقد و بررسی تخصصی
            </li>
            <li
                class="tab-btn flex items-center gap-1 px-4 py-4 cursor-pointer hover:text-blue-600 transition border-b-2 border-transparent">
                <i data-lucide="cpu" class="w-4 h-4"></i> مشخصات فنی
            </li>
            <li
                class="tab-btn flex items-center gap-1 px-4 py-4 cursor-pointer hover:text-blue-600 transition border-b-2 border-transparent">
                <i data-lucide="users" class="w-4 h-4"></i> نظرات کاربران
            </li>
            <li
                class="tab-btn flex items-center gap-1 px-4 py-4 cursor-pointer hover:text-blue-600 transition border-b-2 border-transparent">
                <i data-lucide="help-circle" class="w-4 h-4"></i> پرسش و پاسخ
            </li>
            <li
                class="tab-btn flex items-center gap-1 px-4 py-4 cursor-pointer hover:text-blue-600 transition border-b-2 border-transparent">
                <i data-lucide="scale" class="w-4 h-4"></i> مقایسه سریع
            </li>
        </ul>

        <!-- محتوای تب‌ها -->
        <div id="tab-contents" class="bg-white  border-t-0 rounded-b-lg shadow p-5 transition-all duration-300">

            <!--   محتوای نقد و بررسی تخصصی
 -->
            <?php require('tab1.php') ?>

            <!--    مشخصات فنی -->
            <?php require('tab2.php') ?>
            <!-- نظرات کاربران -->
     <?php require('tab3.php') ?>
            <!-- پرسش و پاسخ -->
     <?php require('tab4.php') ?>
            <div class="tab-content hidden animate-fadeIn">م
                حتوای مقایسه سریع

            </div>
        </div>
    </div>
    <!-- استایل‌های کمکی -->
    <style>
        .active-tab {
            border-color: #3b82f6;
            /* border-blue-500 */
            color: #3b82f6;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-in-out;
        }
    </style>
    <!--  تب ها اسکریپت فعال‌سازی -->
    <script>
        $(document).ready(function () {
            $('#tabs .tab-btn').click(function () {
                const index = $(this).index();
                $('#tabs .tab-btn').removeClass('active-tab');
                $(this).addClass('active-tab');

                $('#tab-contents .tab-content')
                    .hide()
                    .removeClass('animate-fadeIn')
                    .eq(index)
                    .fadeIn(200)
                    .addClass('animate-fadeIn');
            });
        });
    </script>

</div>