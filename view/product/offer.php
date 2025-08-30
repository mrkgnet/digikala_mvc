    <div class="offer_page__">
            <!--timer slider 2-->
            <div
                class="flex items-center justify-between bg-red-500 text-white px-4 py-4  shadow-md font-semibold text-sm w-full ">
                <!-- عنوان -->
                
                <img class="w-40" src="<?= URL?>public/images/special_title_box.png" alt=""><!-- تخفیف -->
                <div
                    class="border border-red-300 flex items-center   py-1 px-2 justify-between  text-black bg-white">
                    <span class="font-bold text-lg ">تخفیف ویژه:</span>
                    <span class="text-black bg-white font-bold px-3 py-1 rounded-full">
                      <?php
                        echo $productInfo['price_discount'] ; // تخفیف
                      ?>
                    </span>
                    <span class=" text-black font-bold  py-1  ">
                        هزار تومان
                    </span>
                </div>

                <!-- تایمر -->
                <div
                    class="border-t flex pt-1  bg-white text-center text-red-600 font-bold text-lg items-center justify-center gap-5 border-gray-300 border-b  px-3  py-px">
                    <p class="px-9"> فرصت باقی مانده تا این تخفیف : </p>

                    <p id="countdown" style="direction: ltr !important;" class="direction: ltr !important;"></p>

                    <!-- اسکریپت تایمر -->
                    <script>
                        // تاریخ هدف شمارش معکوس
                        const targetDate = new Date("<?= $productInfo['date'] ?>").getTime();

                        const countdownElement = document.getElementById("countdown");

                        const countdownTimer = setInterval(() => {
                            const now = new Date().getTime();
                            const distance = targetDate - now;

                            if (distance < 0) {
                                clearInterval(countdownTimer);
                                countdownElement.innerHTML = " زمان تمام شد : ";
                                document.querySelector('#demo_timer_end').classList.add('active_end_time');
                                return;
                            }

                            // محاسبه روز، ساعت، دقیقه و ثانیه
                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const hours = Math.floor(
                                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                            );
                            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // نمایش شمارش معکوس به صورت قالب
                            countdownElement.innerHTML = `
                                      <span style=";display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${days.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${hours.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red;padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${minutes.toString().padStart(2, "0")}
                                            </span>
                                            :
                                            <span style="display:inline-block; border: 3px solid white; background-color: red; padding: 1px 5px; border-radius: 6px; color: white; font-weight: bold;">
                                                ${seconds.toString().padStart(2, "0")}
                                            </span>
                                            `;

                        }, 1000);
                    </script>

                </div>


            </div>



        </div>