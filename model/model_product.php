<?php
class Model_Product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productInfo($id)
    {
        $sql = "SELECT * FROM tbl_product WHERE id =:x";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute(['x' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);




        $data_tbl_option = self::getOption();
        $duration_special = $data_tbl_option['special_time'];

        $first_row = $result;

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

        $result['date'] = $date;



        // تخفیف
        $price_claculate = [];
        $price_claculate = self::calculateDiscount($result['price'], $result['discount']);
        $result['price_discount'] = $price_claculate[0];
        $result['price_total'] = $price_claculate[1];


        return $result;
    }
}
