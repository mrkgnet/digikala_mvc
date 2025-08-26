<?php

use Soap\Url;
?>
<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="public/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/jquery.elevatezoom.js"></script>


    <!-- JQuery -->
    <script src="public/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <!-- لود کردن CSS و JS های Swiper -->
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css" />
    <script src="public/js/swiper-bundle.min.js"></script>

    <!-- Owl Carousel 2 CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/css/owl.theme.default.min" />

    <!-- Owl Carousel 2 JS -->
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.elevatezoom.js"></script>
    <title>دیجی کالا</title>
</head>

<body style="background-color: #cccccc17">

    <!-- header -->
    <header class="bg-white py-5">
        <div class="max-w-screen-xl   m-auto grid grid-cols-3">
            <div id="header_right" class="col-span-2">
                <div id="header_right_top " class="flex gap-4 my-3">

                    <div id="top_right" class="flex gap-2 ">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                clip-rule="evenodd" />
                        </svg>

                        <a href="<?= URL ?>login">
                            فروشگاه اینترنت دیجی کالا وارد شوید
                        </a>
                    </div>

                    <div id="top_left" class="flex gap-2 ">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                clip-rule="evenodd" />
                        </svg>


                        <a href="<?= URL ?>register">
                            ثبت نام کنید
                        </a>
                    </div>

                </div>
                <div id="header_right_bottom" class="flex my-3">

                    <button type="button"
                        class="inline-flex items-center cursor-pointer px-3 py-1 text-sm  text-center text-white bg-green-700  hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        سبد خرید
                        <span
                            class="inline-flex items-center justify-center w-5 h-5 ms-2  font-semibold text-blue-800 bg-blue-200 rounded-full font-sm leading-8">
                            2
                        </span>
                    </button>

                    <form class="ms-4 w-full max-w-md">

                        <div class="relative w-full">
                            <input type="search" id="search-dropdown"
                                class="block p-1.5  w-full z-20 text-sm text-gray-900 bg-gray-50   border border-gray-300 ps-5"
                                placeholder="جست و جو کنید ... " required />
                            <button type="submit"
                                class="absolute cursor-pointer top-0 end-0 p-2 text-sm font-medium h-full text-white bg-blue-700  border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only cursor-pointer">Search</span>
                            </button>
                        </div>

                    </form>


                </div>
            </div>
            <div id="header_left" class="col-span-1 flex items-center justify-end pl-4">
                <a href="./">
                    <img src="public/images/logo.png" alt="logo" srcset="">
                </a>
            </div>
        </div>
    </header>


    <!-- nav -->
    <nav class=" bg-black shadow border-t-0  py-1 border-gray-300 dark:border-gray-600 dark:bg-gray-900 border">

        <div class="  flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-2 ps-0">


            <div id="menu_top" class="items-center justify-between hidden w-full md:flex   ">
                <ul class="flex flex-col gap-4 md:flex-row relative w-full  px-3 z-10  ">
                    <li data-time="1" class="cursor-pointer ">
                        <a
                            class="     flex cursor-pointer  items-center justify-between w-full py-2 px-3 text-white font-bold border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 ">
                            کالای دیجیتال

                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </a>


                        <ul class="absolute bg-gray-100 flex gap-4 left-0 w-full py-3 px-3 mt-3 z-20">
                            <li data-time="12">
                                <a href="#">
                                    موبایل
                                </a>

                                <div
                                    class="w-full submenu3 bg-gray-100 grid grid-cols-4  mt-2  absolute border-t  left-0 border-l border-r border-b border-gray-400 shadow-2xl">
                                    <div class="p-2  border-l border-gray-300">
                                        <ul class="space-y-3.5">
                                            <li class="">
                                                <a href="#" class="text-blue-500">
                                                    گوشی موبایل
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    Apple
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    sumsung
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=" p-2 ">2</div>
                                    <div class="p-2  ">3</div>
                                    <div class="p-2  ">4</div>

                                </div>


                            </li>

                            <li data-time="13">
                                <a href="#">
                                    تبلت و کتابخوان
                                </a>

                                <div
                                    class="w-full border-l border-r border-b  shadow-2xl submenu3 bg-gray-100 grid grid-cols-4  mt-2  absolute border-t border-gray-200 left-0">
                                    <div class="p-2  border-l border-gray-300 border " style="z-index: 31 !important;">
                                        <ul class="space-y-3.5" style="z-index: 31 !important;">
                                            <li class="">
                                                <a href="#" class="text-blue-500">
                                                    تبلت اندرویدی
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    اندازه کوچک
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    اندازه بزرگ
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=" p-2 ">2</div>
                                    <div class="p-2  ">3</div>
                                    <div class="p-2  ">4</div>

                                </div>

                            </li>


                            <li data-time="13">
                                <a href="#">
                                    نوت بوک
                                </a>


                            </li>
                        </ul>
                    </li>


                    <li data-time="2" class="cursor-pointer">
                        <a
                            class="flex cursor-pointer items-center justify-between w-full py-2 px-3  text-white font-bold border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 ">
                            لوازم خانگی برقی

                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </a>

                        <ul class="absolute bg-gray-100 flex gap-4 left-0 w-full py-3 px-3 mt-3 z-20">
                            <li data-time="21">
                                <a href="#">
                                    یخچال
                                </a>
                                <div
                                    class="w-full submenu3  border-l border-r border-b border-gray-400 shadow-2xl bg-gray-100 grid grid-cols-4  mt-2  absolute border-t border-gray-200 left-0">
                                    <div class="p-2  border-l border-gray-300">
                                        <ul class="space-y-3.5">
                                            <li class="">
                                                <a href="#" class="text-blue-500">
                                                    ساید بای ساید
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    فریزر
                                                </a>
                                            </li>
                                            <li class="ps-3">
                                                <a href="">
                                                    تک شارژه
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=" p-2 ">2</div>
                                    <div class="p-2  ">3</div>
                                    <div class="p-2  ">4</div>

                                </div>


                            </li>

                            <li data-time="22">
                                <a href="#">
                                    لباس شویی
                                </a>


                            </li>
                        </ul>
                    </li>


                </ul>
            </div>

            <!--        <a href="https://flowbite.com" class="flex items-center  ">-->
            <!--            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />-->
            <!--            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>-->
            <!--        </a>-->
        </div>

        <!-- دستورات منوی اصلی -->
        <script>
            //دستورات منو اصلی
            var timer = {};
            $('#menu_top li').hover(function() {
                var tag = $(this)

                var timerAttr = tag.attr('data-time');
                clearTimeout(timer[timerAttr]);

                timer[timerAttr] = setTimeout(function() {
                    $('>ul', tag).addClass('active_main_menu');
                    $(">.submenu3", tag).addClass('active2_main_menu');
                }, 200)

            }, function() {
                var tag = $(this)
                var timerAttr = tag.attr('data-time');
                clearTimeout(timer[timerAttr]);

                timer[timerAttr] = setTimeout(function() {
                    $('>ul', tag).removeClass("active_main_menu");
                    $(">.submenu3", tag).removeClass('active2_main_menu');
                }, 300)
            })
        </script>

    </nav>