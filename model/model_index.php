<?php
class Model_index
{
    public $conn;
    public function __construct()
    {
        $host = "localhost";    // آدرس سرور دیتابیس
        $dbname = "digi_mvc"; // نام دیتابیس
        $username = "root";      // یوزرنیم
        $password = "";          // پسورد

        try {
            // ساخت شیء PDO
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo "خطا در اتصال: " . $e->getMessage();
        }
    }

    public function getSlider1()
    {

        $sql = "SELECT * FROM tbl_slider1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getSlider2()
    {
        $sql = "SELECT * FROM tbl_product WHERE special=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result1;
    }
}
