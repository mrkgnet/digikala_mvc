<?php
class Test
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

    public function getProduct()
    {
        $id = 1;
        $price = 20000;
        $values = [$id ,$price];
        $sql = "SELECT * FROM tbl_product WHERE id = ? AND price = ?";
        $result = $this->doSelect($sql, $values);
        
        // خروجی رو قشنگ‌تر JSON نشون بده
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    public function doSelect($sql, $values = [], $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();

        $result = ($fetch == '') ? $stmt->fetchAll($fetchStyle) : $stmt->fetch($fetchStyle);
        

        return $result;
    }
}

$test = new Test();
$test->getProduct();
?>
