<?php
class Database{

    // specify your own database credentials
    // private $host = "localhost";
    // private $db_name = "SaleVale";
    // private $username = "svillarreal";
    // private $password = "gpeex2022!";
    // public $conn;

    $user = "svillarreal";
    $password = "gpeex2022!";
    $database = "example_database";
    $table = "proveedores";

    try {
      $db = new PDO("mysql:host=104.254.247.128;dbname=$database", $user, $password);
      echo "<h2>TODO</h2><ol>";
      foreach($db->query("SELECT Nombre FROM $table") as $row) {
        echo "<li>" . $row['Nombre'] . "</li>";
      }
      echo "</ol>";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    // get the database connection
    // public function getConnection(){

    //     $this->conn = null;
    //     try{
    //         $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    //         $this->conn->exec("set names utf8");
    //     }catch(PDOException $exception){
    //         echo "Connection error: " . $exception->getMessage();
    //     }

    //     return $this->conn;
    // }
}
?>
