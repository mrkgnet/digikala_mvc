

<!--main-->
<div id="main" class="max-w-screen-xl m-auto">
    <!--ثبت نام-->
    <div class="min-h-screen flex items-center justify-center  my-4">
        <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">ثبت‌نام</h2>

            <form class="space-y-4">
                <div>
                    <label class="block text-gray-600 mb-1">نام کامل</label>
                    <input type="text"
                           class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                           placeholder="نام و نام خانوادگی">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">ایمیل</label>
                    <input type="email"
                           class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                           placeholder="ایمیل خود را وارد کنید">
                </div>

                <div>
                    <label class="block text-gray-600 mb-1">رمز عبور</label>
                    <input type="password"
                           class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                           placeholder="********">
                </div>

                <div class="flex items-center gap-3">
                    <input id="remember" type="checkbox" class="w-4 h-4 text-blue-500 focus:ring-blue-400 rounded">
                    <label for="remember" class="ml-2 text-gray-600 text-sm">مرا به خاطر بسپار</label>
                </div>


                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-xl transition duration-300">
                    ایجاد حساب
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-4">
                حساب دارید؟
                <a href="#" class="text-blue-500 hover:underline">وارد شوید</a>
            </p>
        </div>
    </div>

</div>


