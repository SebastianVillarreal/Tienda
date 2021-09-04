<?php 
	
	/**
	 * 
	 */
	class Pagos{
		// database connection and table name
      private $conn;
      private $table_name = "Obras";

      public $id;
      public $total;
      public $fecha;
      public $proveedor;
      public $usuario;
      public $sucursal;


      public function __construct($db){
          $this->conn = $db;
      }


		function Create(){
	        $call = "CALL InsertPago(:pIdProveedor, :pUsuario, :pTotal, :pSucursal)";
	        $stmt = $this->conn->prepare($call);
	        // sanitize
	        $this->nombre=htmlspecialchars(strip_tags($this->nombre));
	        // bind values
	        $stmt->bindParam(":pIdProveedor", $this->proveedor);
	        $stmt->bindParam(":pUsuario", $this->usuario);
	        $stmt->bindParam(":pTotal", $this->total);
	        $stmt->bindParam(":pSucursal", $this->sucursal);

	        if($stmt->execute()){
            	return true;
	        }

	        return false;
	        // execute query
  		}


	}

 ?>