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
        $result = $this->doSelect($sql);
        return $result;
    }

  


    public function getSlider2()
    {
        $sql = "SELECT * FROM tbl_product WHERE special=? ";
        $result = $this->doSelect($sql, [1]);


        // گرفتن مقدار duration_special از جدول tbl_option
        $data_tbl_option = self::getOption();
        $duration_special = $data_tbl_option['special_time'];

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

        // روش دوم با استفاده چت جی بی تی برای محاسبه تخفیف
        foreach ($result as &$row) {
            $price = $row['price'];
            $discount_percent = $row['discount'];

            $cal_fetch = self::calculateDiscount($price, $discount_percent);
            $row['total_price'] = $cal_fetch['price_total'];
        }

        return [$result, $date];
    }

    public function getOnlyDigiKala()
    {
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";
        $limit = $this->doSelect($sql, [], '1');
        $limitValue = $limit['value'];

        $sql = "SELECT * FROM `tbl_product` WHERE `only_digikala` = 1 ORDER BY `id` DESC limit $limitValue";
        $result = $this->doSelect($sql);
        return $result;
    }

    public function getMostViewed()
    {
        // محاسبه محدودیت اسلایر
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";       
        $limit = $this->doSelect($sql, [], '1');
        $limitValue = $limit['value'];


        $sql = "SELECT * FROM `tbl_product` ORDER BY `view` DESC limit $limitValue";       
        $result = $this->doSelect($sql);
        return $result;
    }


    public function getLastProduct()
    {
        $sql = "SELECT * FROM `tbl_option` WHERE `setting` = 'limit_slider'";       
        $limit = $this->doSelect($sql, [], '1');
        $limitValue = $limit['value'];

        $sql = "SELECT * FROM `tbl_product` ORDER BY `id` DESC limit $limitValue";        
        $result = $this->doSelect($sql);
        return $result;
    }
}
