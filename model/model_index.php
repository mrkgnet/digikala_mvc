<?php
class Model_index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSlider1()
    {

        $sql = "SELECT * FROM tbl_slider1";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getSlider2()
    {
        $sql = "SELECT * FROM tbl_product WHERE special=1 ORDER BY id DESC LIMIT 5";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // گرفتن مقدار duration_special از جدول tbl_option
        $sql = 'SELECT * FROM tbl_option WHERE setting ="special_time" ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result2 = $stmt->fetch(PDO::FETCH_ASSOC);
        $duration_special = $result2['value'];

        $first_row = $result[0];
        // گرفتن مقدار time_special
        $time_special = $first_row['time_special'];
        // بررسی نوع داده
        if (is_numeric($time_special)) {
            // اگه timestamp یونیکس باشه
            $time_special = (int)$time_special;
        } else {
            // اگه DATETIME باشه
            $time_special = strtotime($time_special);
        }

        // محاسبه پایان (۲۴ ساعت بعد)
        $time_end = $time_special + ($duration_special);
        // ست کردن تایم‌زون
        date_default_timezone_set('Asia/Tehran');
        // فرمت تاریخ خروجی
        $date = date('F d, Y H:i:s', $time_end);


        // 🔹 محاسبه تخفیف درصدی برای همه محصولات
        // foreach ($result as $key => $row) {
        //     $price = $row['price'];
        //     $discount_percent = $row['discount'];

        //     $discount_amount = ($price * $discount_percent) / 100;
        //     $result[$key]['total_price'] = $price - $discount_amount;
        // }


        // روش دوم با استفاده چت جی بی تی برای محاسبه تخفیف
        foreach ($result as &$row) {
            $price = $row['price'];
            $discount_percent = $row['discount'];

            $discount_amount = ($price * $discount_percent) / 100;
            $row['total_price'] = $price - $discount_amount;  // ← اینجاست
        }

        return [$result, $date];
    }

    public function getOnlyDigiKala()
    {
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";
        $stmt= self::$conn->prepare($sql);
        $stmt->execute();
        $limit = $stmt->fetch(PDO::FETCH_ASSOC);
        $limitValue = $limit['value'];



        $sql = "SELECT * FROM `tbl_product` WHERE `only_digikala` = 1 ORDER BY `id` DESC limit $limitValue";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getMostViewed()
    {
        // محاسبه محدودیت اسلایر
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $limit = $stmt->fetch(PDO::FETCH_ASSOC);
        $limitValue = $limit['value'];


        $sql = "SELECT * FROM `tbl_product` ORDER BY `view` DESC limit $limitValue";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getLastProduct()
    {
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $limit = $stmt->fetch(PDO::FETCH_ASSOC);
        $limitValue = $limit['value'];


        
        $sql = "SELECT * FROM `tbl_product` ORDER BY `id` DESC limit $limitValue";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
