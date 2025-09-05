<?php
// اگر درخواست ایجکس بود، پاسخ HTML می‌دهیم
if(isset($_GET['link']) && !empty($_GET['link'])) {
    $url = $_GET['link'];
    $jsonContent = @file_get_contents($url);
    if($jsonContent === false){
        die("خطا در دریافت داده از لینک");
    }

    $data = json_decode($jsonContent, true);
    if($data === null){
        die("خطا در تبدیل JSON به آرایه");
    }

    if(!isset($data['remarks'])){
        die("کلید 'remarks' وجود ندارد");
    }

    $remark = $data['remarks'];
    $volumeThreshold = 3;
    $daysThreshold = 2;

    if(strpos($remark, '⛔️N/A') !== false){
        $sizeText = 'ترافیک شما به اتمام رسیده';
        $daysText = 'زمان شما به اتمام رسیده';
        $sizeColor = '#d32f2f';
        $daysColor = '#d32f2f';
    } else {
        $lastDashPos = strrpos($remark, '-');          
        $secondLastDashPos = strrpos($remark, '-', $lastDashPos - strlen($remark) - 1); 
        $afterSecondDash = substr($remark, $secondLastDashPos + 1);
        $parts = explode('-', $afterSecondDash);

        // حجم فقط قسمت صحیح
        $size = $parts[0];
        preg_match('/([\d\.]+)/', $size, $sizeMatch);
        $sizeValue = isset($sizeMatch[1]) ? intval(floatval($sizeMatch[1])) : 0;
        $sizeText = ' ترافیک باقی مانده'." : ". $sizeValue." "." گیگابایت";
        $sizeColor = ($sizeValue < $volumeThreshold) ? '#d32f2f' : '#1abc9c';

        // روز باقی مانده
        preg_match('/(\d+)D/', $parts[1], $dayMatch);
        $daysValue = isset($dayMatch[1]) ? intval($dayMatch[1]) : 0;
        $daysText = ' زمان باقی مانده'." : ". $daysValue." "."روز" ;
        $daysColor = ($daysValue < $daysThreshold) ? '#d32f2f' : '#3498db';
    }

    // خروجی HTML
    echo "<div class='info fw-bold my-2' style='color: $sizeColor;'><span>📊</span> $sizeText</div>";
    echo "<div class='info fw-bold my-2' style='color: $daysColor;'><span>⏳</span> $daysText</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<title>مشاهده ترافیک</title>
<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
<style>
body {
    font-family: 'Vazirmatn', Tahoma, sans-serif;
    background: linear-gradient(135deg, #f0f2f5, #dfe9f3);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container-box {
    background: #fff;
    padding: 30px;
   
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    max-width: 500px;
    width: 100%;
}
h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}
.info span {
    margin-left: 8px;
    font-size: 22px;
}
*{
    border-radius: 0 !important;
}
</style>
</head>
<body>
<div class="container">
    <div class="container-box text-center m-auto" >
        <h2>مشاهده ترافیک سرویس</h2>
        <div class="mb-3">
            <input type="text" id="urlInput" class="form-control text-center" placeholder="لینک JSON را وارد کنید">
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <button class="btn btn-success" onclick="checkTraffic()">مشاهده ترافیک</button>
            <button class="btn btn-primary" onclick="refreshTraffic()">بروزرسانی</button>
            <button class="btn btn-danger" onclick="clearLink()">پاک کردن لینک</button>
        </div>
        <div id="result" class="mt-4"></div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const savedLink = localStorage.getItem("userLink");
    if(savedLink) {
        document.getElementById('urlInput').value = savedLink;
        checkTraffic();
    }
});

function checkTraffic(showAlert = false) {
    let url = document.getElementById('urlInput').value;
    if(!url) {
        alert('لطفاً لینک را وارد کنید');
        return;
    }

    localStorage.setItem("userLink", url);

    fetch('?link=' + encodeURIComponent(url))
        .then(response => response.text())
        .then(data => {
            document.getElementById('result').innerHTML = data;
            if (showAlert) {
                alert("اطلاعات با موفقیت بروزرسانی شد ✅");
            }
        })
        .catch(err => {
            document.getElementById('result').innerHTML = '<div class="text-danger">خطا در دریافت اطلاعات</div>';
            console.error(err);
        });
}

function refreshTraffic() {
    checkTraffic(true); // با alert
}

function clearLink() {
    localStorage.removeItem("userLink"); 
    document.getElementById('urlInput').value = ''; 
    document.getElementById('result').innerHTML = ''; 
}
</script>
</body>
</html>
