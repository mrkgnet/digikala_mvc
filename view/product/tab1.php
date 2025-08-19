          <div class="tab-content block animate-fadeIn">

                محتوای نقد و بررسی تخصصی

                <!-- آکاردئون -->
                <div class="my-8 space-y-3">

                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <div
                            class="accordion-header cursor-pointer flex items-center justify-between bg-gray-100 px-4 py-3 hover:bg-gray-200 transition">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-5 bg-gray-400"></div>
                                <span class="icon text-lg text-gray-600">+</span>
                                <h3 class="font-semibold text-gray-700"> طراحی و ساخت </h3>
                            </div>
                        </div>
                        <div class="accordion-body hidden px-5 py-4 text-gray-600 border-t">
                            این بخش محتوای آکاردئون است. می‌توانید توضیحات یا عناصر مختلف قرار دهید.
                        </div>
                    </div>



                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <div
                            class="accordion-header cursor-pointer flex items-center justify-between bg-gray-100 px-4 py-3 hover:bg-gray-200 transition">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-5 bg-gray-400"></div>
                                <span class="icon text-lg text-gray-600">+</span>
                                <h3 class="font-semibold text-gray-700">
                                    صفحه نمایش </h3>
                            </div>
                        </div>
                        <div class="accordion-body hidden px-5 py-4 text-gray-600 border-t">
                            این بخش محتوای آکاردئون است. می‌توانید توضیحات یا عناصر مختلف قرار دهید.
                        </div>
                    </div>



                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <div
                            class="accordion-header cursor-pointer flex items-center justify-between bg-gray-100 px-4 py-3 hover:bg-gray-200 transition">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-5 bg-gray-400"></div>
                                <span class="icon text-lg text-gray-600">+</span>
                                <h3 class="font-semibold text-gray-700">
                                    دوربین
                                </h3>
                            </div>
                        </div>
                        <div class="accordion-body hidden px-5 py-4 text-gray-600 border-t">
                            این بخش محتوای آکاردئون است. می‌توانید توضیحات یا عناصر مختلف قرار دهید.
                        </div>
                    </div>

                    <div class="accordion-item border border-gray-200 rounded-lg overflow-hidden">
                        <div
                            class="accordion-header cursor-pointer flex items-center justify-between bg-gray-100 px-4 py-3 hover:bg-gray-200 transition">
                            <div class="flex items-center gap-2">
                                <div class="w-1 h-5 bg-gray-400"></div>
                                <span class="icon text-lg text-gray-600">+</span>
                                <h3 class="font-semibold text-gray-700">
                                    سخت افزار و باتری
                                </h3>
                            </div>
                        </div>
                        <div class="accordion-body hidden px-5 py-4 text-gray-600 border-t">
                            این بخش محتوای آکاردئون است. می‌توانید توضیحات یا عناصر مختلف قرار دهید.
                        </div>
                    </div>



                </div>

                <!-- jQuery Script -->
                <script>
                    $(document).ready(function () {
                        $(".accordion-header").click(function () {
                            const $icon = $(this).find(".icon");
                            const $body = $(this).next(".accordion-body");

                            // بستن سایر آکاردئون‌ها
                            $(".accordion-body").not($body).slideUp();
                            $(".accordion-header .icon").not($icon).text("+");

                            // باز یا بسته کردن این یکی
                            $body.slideToggle();
                            $icon.text($icon.text() === "+" ? "−" : "+");
                        });
                    });
                </script>



            </div>