<div class="search_in_filter flex gap-4">

    <div class="search_top_filter">
        <div class="w-full max-w-md">
            <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-4.35-4.35M16.65 16.65A7.5 7.5 0 1116.65 2a7.5 7.5 0 010 15z" />
                                </svg>
                            </span>
                <input type="text" placeholder="جستجو..."
                       class="w-full py-2 pl-10 pr-4 bg-white border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition placeholder-gray-400" />
            </div>
        </div>
    </div>

    <!-- کالاهای موجود -->

    <div>
        <div class="flex items-center justify-center ">
            <button id="toggleBtn"
                    class="px-6 py-2 rounded-full bg-gray-300 text-gray-700 font-medium transition-colors duration-300 hover:bg-gray-400 active:scale-95 focus:outline-none select-none flex items-center gap-2">
                            <span id="checkMark" class="hidden text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                <span id="btnText">نمایش همه کالاها</span>
            </button>
        </div>


        <script>
            $(function () {
                let isAvailable = false;

                $('#toggleBtn').click(function () {
                    isAvailable = !isAvailable;

                    $('#checkMark').toggle(isAvailable);

                    if (isAvailable) {
                        $(this)
                            .removeClass('bg-gray-300 text-gray-700 hover:bg-gray-400')
                            .addClass('bg-green-500 text-white hover:bg-green-600');
                        $('#btnText').text('نمایش کالاهای موجود');
                    } else {
                        $(this)
                            .removeClass('bg-green-500 text-white hover:bg-green-600')
                            .addClass('bg-gray-300 text-gray-700 hover:bg-gray-400');
                        $('#btnText').text('نمایش همه کالاها');
                    }
                });
            });
        </script>
    </div>



</div>
