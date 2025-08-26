<!-- اصلی slider-->

<div class="swiper mySwiper mb-3 shadow-lg">

    <style>
        .swiper {
            width: 100%;
            height: 220px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* تایمر دایره‌ای با شمارنده */
        .slide-timer {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            z-index: 10;
        }

        .slide-timer svg {
            transform: rotate(-90deg);
        }

        .slide-timer circle {
            fill: none;
            stroke-width: 4;
        }

        .slide-timer .bg {
            stroke: rgba(255, 255, 255, 0.3);
        }

        .slide-timer .progress {
            stroke: #ff0075;
            stroke-linecap: round;
            transition: stroke-dashoffset linear;
        }

        /* عدد وسط تایمر */
        .timer-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: bold;
            color: #ff0c4c;
            pointer-events: none;
        }
    </style>



    <!-- تایمر دایره‌ای -->
    <div class="slide-timer">
        <svg width="40" height="40">
            <circle class="bg" cx="20" cy="20" r="18"></circle>
            <circle class="progress" cx="20" cy="20" r="18"></circle>
        </svg>
        <div class="timer-text">5</div>
    </div>

    <div class="swiper-wrapper">

        <?php
        $data_slider1 = $data[0];


        foreach ($data_slider1 as $row) {
        ?>
            <div class="swiper-slide" >
                <a class="" href="<?= $row['link'] ?>" target="_blank" >
                    <img class="rounded-none" src="<?= $row['img'] ?>" alt="Slide 1" >
                </a>
            </div>


            
        <?php
        }
        ?>
    </div>

    <!-- دکمه‌های ناوبری -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- دات‌های پایین -->
    <div class="swiper-pagination"></div>

    <!-- اسکریپت اسلایدر اصلی -->
    <script>
        const autoplayDelay = 5000; // زمان هر اسلاید
        const radius = 18;
        const circumference = 2 * Math.PI * radius;
        const progressCircle = document.querySelector('.progress');
        const timerText = document.querySelector('.timer-text');
        const swiperContainer = document.querySelector('.swiper.mySwiper');

        progressCircle.style.strokeDasharray = circumference;
        progressCircle.style.strokeDashoffset = 0;

        let countdownInterval;

        function startTimer() {
            clearInterval(countdownInterval);

            progressCircle.style.transition = 'none';
            progressCircle.style.strokeDashoffset = 0;

            let timeLeft = autoplayDelay / 1000;
            timerText.textContent = timeLeft;

            setTimeout(() => {
                progressCircle.style.transition = `stroke-dashoffset ${autoplayDelay}ms linear`;
                progressCircle.style.strokeDashoffset = circumference;
            }, 50);

            countdownInterval = setInterval(() => {
                timeLeft--;
                if (timeLeft >= 0) {
                    timerText.textContent = timeLeft;
                }
            }, 1000);
        }

        function stopTimer() {
            clearInterval(countdownInterval);
            // متوقف کردن انیمیشن دایره
            progressCircle.style.transition = 'none';
        }

        const swiper = new Swiper(".mySwiper", {
            loop: true,
            rtl: true,
            autoplay: {
                delay: autoplayDelay,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                slideChangeTransitionStart: startTimer,
            },
        });

        // شروع تایمر اولیه
        startTimer();

        // توقف و شروع اسلایدر و تایمر با موس
        swiperContainer.addEventListener('mouseenter', () => {
            swiper.autoplay.stop();
            stopTimer();
        });

        swiperContainer.addEventListener('mouseleave', () => {
            swiper.autoplay.start();
            startTimer();
        });
    </script>

</div>