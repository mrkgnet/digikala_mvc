<?php
class Model
{
    public static $conn;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "digikala_mvc";
        $username = "root";
        $password = "";

        if (!self::$conn) { // فقط یکبار اتصال ساخته بشه
            try {
                self::$conn = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8",
                    $username,
                    $password,
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                    )
                );
            } catch (PDOException $e) {
                echo "خطا در اتصال: " . $e->getMessage();
            }
        }
    }

    // این تابع برای گرفتن اطلاعات از جدول اپشن مورد استفاده قرار میگیره
    public static function getOption()
    {

        $sql = 'SELECT * FROM tbl_option';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $option_new = [];
        foreach ($result as $row) {
            $setting = $row['setting'];
            $vlaue = $row['value'];
            $option_new[$setting] = $vlaue; // tel=>0912345678,address=>تهران, ....
        } // ['tel'=>'0912345678','address'=>'تهران', ....]

       
        return $option_new;
    }

    // تابع محاسبه تخفیف
    public static function calculateDiscount($price, $discountPrecent)
    {
        $price_discount = ($price * $discountPrecent) / 100; // میزان تخفیف برحسب تومان
        $price_total = $price - $price_discount;
        return [$price_discount, $price_total];
    }
}
