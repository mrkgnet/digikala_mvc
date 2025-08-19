<!-- تب‌ها -->
<div class="mb-4 border-b border-gray-200 dark:border-gray-700 p-4">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center border-t-8 border-gray-500 rounded-lg"
        id="default-tab" role="tablist">
        <li class="me-2" role="presentation">
            <button class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                    data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">پیغام های من
            </button>
        </li>
        <li class="me-2" role="presentation">
            <button class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="dashboard-tab"
                    data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">سفارشات من
            </button>
        </li>
        <li class="me-2" role="presentation">
            <button class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="settings-tab"
                    data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">لیست مورد علاقه
            </button>
        </li>
        <li role="presentation">
            <button class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="contacts-tab1"
                    data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">نظرات من
            </button>
        </li>
        <li role="presentation">
            <button class="cursor-pointer inline-block p-4 border-b-2 rounded-t-lg" id="contacts-tab"
                    data-tabs-target="#digibon" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">دیجی بن های من
            </button>
        </li>
    </ul>
</div>

<!-- محتوای تب‌ها -->
<div id="default-tab-content">

    <!-- پیغام های من -->
    <?php require ('tab1_mypygham.php')?>

    <!-- سفارشات من -->
    <?php require ('tab2_mysefaresh.php')?>

    <!-- لیست مورد علاقه  -->
    <?php require ('tab2_mylist.php')?>

    <!-- نطرات من من -->
    <?php require ('tab2_mynazarat.php')?>

    <!-- دیجی من من -->
    <?php require ('tab2_mydigibon.php')?>


</div>

<!-- اسکریپت تب ها  -->
<script>
    $(document).ready(function () {
        $('#default-tab button').click(function () {
            $('#default-tab button')
                .removeClass('border-blue-600 text-blue-600')
                .addClass('border-transparent')
                .attr('aria-selected', 'false');

            $('#default-tab-content > div').addClass('hidden');

            $(this)
                .removeClass('border-transparent')
                .addClass('border-blue-600 text-blue-600')
                .attr('aria-selected', 'true');

            const target = $(this).data('tabs-target');
            $(target).removeClass('hidden');
        });

        $('#default-tab button').first().trigger('click');
    });
</script>


<!-- اسکریپت سریع باز/بسته شدن -->
<script>
    $(document).ready(function () {
        $('.toggle-details').click(function () {
            const detailsRow = $(this).closest('tr').next('.details-row');
            $('.details-row').not(detailsRow).slideUp(100); // سریع بستن بقیه
            detailsRow.slideToggle(100); // سریع باز/بسته کردن مورد فعلی
        });
    });
</script>

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
