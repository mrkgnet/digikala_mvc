<div class="filter_top">
    <!-- فیلترهای انتخاب‌شده -->
    <div id="activeFilters" class=" px-3 mb-4 text-sm text-blue-700 font-medium">
        فیلترهای انتخاب‌شده: <span id="filtersDisplay" class="text-gray-600">هیچ موردی انتخاب نشده
            است.</span>
    </div>

    <div class="flex gap-3">

        <!-- فیلتر ۱: نوع سفارش -->
        <div class="relative  mb-4">
            <button
                class="dropdownButton flex items-center justify-between w-full bg-white border border-gray-300 rounded-lg px-4 py-2 shadow hover:bg-gray-50 transition">
                <span>نوع سفارش</span>
                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5.5 7l4.5 4 4.5-4H5.5z" />
                </svg>
            </button>

            <div
                class="dropdownMenu hidden absolute z-10 mt-2  max-h-60 overflow-x-auto  w-full bg-white border border-gray-300   min-w-44 rounded-lg shadow p-2 space-y-2 text-right">
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer font-bold">
                    <input type="checkbox" class="select-all" data-filter="نوع سفارش">
                    <span>انتخاب همه</span>
                </label>
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="نوع سفارش" value="تکی">
                    <span>تکی</span>
                </label>
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="نوع سفارش" value="عمده">
                    <span>عمده</span>
                </label>
            </div>
        </div>

        <!-- فیلتر : رنگ -->
        <div class="relative  mb-4">
            <button
                class="dropdownButton flex items-center   min-w-44 justify-between w-full bg-white border border-gray-300 rounded-lg px-4 py-2 shadow hover:bg-gray-50 transition">
                <span>رنگ محصول</span>
                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5.5 7l4.5 4 4.5-4H5.5z" />
                </svg>
            </button>

            <div
                class="dropdownMenu hidden absolute z-10 mt-2  max-h-60 overflow-x-auto w-full bg-white border border-gray-300 rounded-lg shadow p-2 space-y-2 text-right">
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer font-bold">
                    <input type="checkbox" class="select-all" data-filter="رنگ">
                    <span>انتخاب همه</span>
                </label>
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="رنگ" value="قرمز">
                    <span>قرمز</span>
                </label>
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="رنگ" value="آبی">
                    <span>آبی</span>
                </label>
                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="رنگ" value="سبز">
                    <span>سبز</span>
                </label>
            </div>



        </div>


        <!-- فیلتر : سازنده -->
        <div class="relative mb-4">
            <button
                class="dropdownButton flex items-center justify-between w-full bg-white border border-gray-300 rounded-lg px-4 py-2 shadow hover:bg-gray-50 transition">
                <span>سازنده</span>
                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5.5 7l4.5 4 4.5-4H5.5z" />
                </svg>
            </button>

            <div
                class="dropdownMenu hidden absolute z-10 mt-2  max-h-60 overflow-x-auto bg-white border border-gray-300 rounded-lg shadow p-2 space-y-2 text-right min-w-44 w-auto">

                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer font-bold">
                    <input type="checkbox" class="select-all" data-filter="سازنده">
                    <span>انتخاب همه</span>
                </label>

                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="ال جی">
                    <span>ال جی</span>
                </label>

                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="سامسونگ">
                    <span>سامسونگ</span>
                </label>

                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>


                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>



                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>





                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>




                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>




                <label class="flex items-center space-x-2 rtl:space-x-reverse cursor-pointer">
                    <input type="checkbox" class="filterOption" data-filter="سازنده" value="اپل">
                    <span>اپل</span>
                </label>





            </div>
        </div>




    </div>



    <!-- اضافه کردن فیلتر ها به  -->
    <script>
        const activeFilters = {};

        function updateFiltersDisplay() {
            const result = [];
            $.each(activeFilters, function(filterType, values) {
                if (values.length) {
                    result.push(filterType + ': ' + values.join('، '));
                }
            });

            $('#filtersDisplay').text(result.length ? result.join(' | ') : 'هیچ موردی انتخاب نشده است.');
        }

        $(document).ready(function() {
            // باز و بسته کردن منوها
            $('.dropdownButton').click(function() {
                const menu = $(this).next('.dropdownMenu');
                $('.dropdownMenu').not(menu).hide();
                menu.toggle();
            });

            // انتخاب گزینه‌ها
            $('.filterOption').change(function() {
                const filterType = $(this).data('filter');
                const value = $(this).val();

                if (!activeFilters[filterType]) {
                    activeFilters[filterType] = [];
                }

                if ($(this).is(':checked')) {
                    activeFilters[filterType].push(value);
                } else {
                    activeFilters[filterType] = activeFilters[filterType].filter(item => item !== value);
                }

                updateFiltersDisplay();
                $(this).closest('.dropdownMenu').hide();
            });

            // انتخاب همه
            $('.select-all').change(function() {
                const filterType = $(this).data('filter');
                const isChecked = $(this).is(':checked');

                const options = $(this).closest('.dropdownMenu').find('.filterOption[data-filter="' + filterType + '"]');
                options.prop('checked', isChecked);

                activeFilters[filterType] = isChecked ? options.map(function() {
                    return $(this).val();
                }).get() : [];

                updateFiltersDisplay();
                $(this).closest('.dropdownMenu').hide();
            });

            // کلیک بیرون برای بستن منوها
            $(document).click(function(e) {
                if (!$(e.target).closest('.dropdownButton, .dropdownMenu').length) {
                    $('.dropdownMenu').hide();
                }
            });
        });
    </script>


</div>