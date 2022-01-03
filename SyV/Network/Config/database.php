<?php
class Database{

    // specify your own database credentials
    private $host = "104.254.247.128";
    private $db_name = "SaleVale";
    private $username = "svillarreal";
    private $password = "gpeex2022!";
    public $conn;
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
    // public function getConnection(){

    //     // $this->conn = null;
    //     // try{    
    //     //     //$this->conn = new PDO("mysql:host=104.254.247.128;dbname=SaleVale", "svillarreal", "gpeex2022!");

    //     //      //$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    //     //     //$this->conn->exec("set names utf8");
    //     // }catch(PDOException $exception){
    //     //     echo "Connection error: " . $exception->getMessage();
    //     //     print "Error!: " . $exception->getMessage() . "<br/>";
    //     // }

    //     return $this->conn;
    // }
}
?>
