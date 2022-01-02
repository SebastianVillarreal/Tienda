<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "SaleVale";
    private $username = "svillarreal";
    private $password = "gpeex2022!";
    public $conn;

    $user = "svillarreal";
    $password_b = "gpeex2022!";
    $database = "example_database";
    // $table = "proveedores";
    // public function getConnection(){
    //     try {
    //         print_r("connected!!");
    //         $db = new PDO("mysql:host=104.254.247.128;dbname=$database", $user, $password);
    //         return $db;

    //     }
    //       echo "</ol>";
    //     } catch (PDOException $e) {
    //         print "Error!: " . $e->getMessage() . "<br/>";
    //         die();
    //     }
    // }

    

    // get the database connection
    public function getConnection(){

        $this->conn = null;
        try{
            $this->conn = new new PDO("mysql:host=104.254.247.128;dbname=$database", $user, $password_b);
            //$this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
