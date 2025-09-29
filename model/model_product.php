<?php
class Model_Product extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productInfo($id)
    {
        $sql = "SELECT * FROM tbl_product WHERE id =?";

        $result = $this->doSelect($sql, [$id], '1');

        //محاسبه تایمر 
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
        $result['price_discount'] = $price_claculate['price_discount'];
        $result['price_total'] = $price_claculate['price_total'];


        // دریافت رنگ ها
        $all_colors = [];
        $colors = $result['colors'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);
        foreach ($colors as $item) {
            $colorInfo = $this->colorInfo($item);
            array_push($all_colors, $colorInfo);
        }
        $result['all_colors'] = $all_colors;

        $all_garantee = [];
        $garantees = $result['garantees'];
      
        $garantees = explode(',', $garantees);
        $garantees = array_filter($garantees);
            

        foreach ($garantees as $item) {
           
            $garanteeInfo = $this->garanteeInfo($item);
            array_push($all_garantee, $garanteeInfo);
        }
        
        $result['all_garantee'] = $all_garantee;    

        return $result;
    }

    public function colorInfo($id) 
    {
        $sql = "SELECT * FROM tbl_color WHERE id =?";
        $result = $this->doSelect($sql, [$id]);
        return $result;
    }

    public function garanteeInfo($id)
    {
        $sql = "SELECT * FROM tbl_garantee WHERE id =?";
        $result = $this->doSelect($sql, [$id]);
        return $result;
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





}
