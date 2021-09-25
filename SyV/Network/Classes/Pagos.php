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
	        $call = "CALL InsertPago(:pIdProveedor, :pUsuario, :pTotal, :pSucursal, :pFecha)";
	        $stmt = $this->conn->prepare($call);
	        // sanitize
	        $this->nombre=htmlspecialchars(strip_tags($this->nombre));
	        // bind values
	        $stmt->bindParam(":pIdProveedor", $this->proveedor);
	        $stmt->bindParam(":pUsuario", $this->usuario);
	        $stmt->bindParam(":pTotal", $this->total);
	        $stmt->bindParam(":pSucursal", $this->sucursal);
	        $stmt->bindParam(":pFecha", $this->fecha);

	        if($stmt->execute()){
            	return true;
	        }

	        return false;
	        // execute query
  		}

  		function read(){
	        $call = "CALL GetPagos()";
	        $stmt = $this->conn->prepare($call);
	        // bind values
	        //$stmt->bindParam(":pIdCliente", $this->id_cliente);
	        $stmt->execute();
	        return $stmt;
      	}


	}

 ?>