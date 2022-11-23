<?php
	class connNoSQL
	{
        private $db   = "purificadora";   //Nombre de su base de datos en mongo
        private $host = "//localhost:27017";	//Puerto por donde se conecta
        
		private static $instancia;
		private $connection;		

		/*Constructor de la clase
            Utiliza el driver MongoDB de PHP*/
		private function __construct()
		{
			try{
				$this->connection = new MongoDB\Driver\Manager("mongodb:".$this->host);
                $this->dbstats();
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "Exception:", $e->getMessage(), "\n";
				echo "En archivo:", $e->getFile(), "\n";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}
		
		/*Clase singleton solo se instancia una vez la clase*/
		public static function singleton()
		{
			if (!isset(self::$instancia)) {
				$miclase = __CLASS__;
				self::$instancia = new $miclase;
			}
			return self::$instancia;
		}
		
		/*Devuelve estadísticas de la base de datos*/
		public function dbstats(){
			try{
                $stats = new MongoDB\Driver\Command(["dbstats"=>1]);
                $res = $this->connection->executeCommand($this->db, $stats);
                $stats = current($res->toArray());
                return $stats;
            }catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "<pre>";
				echo "Exception:", $e->getMessage(), "\n";
				echo "<pre>";
				echo "En archivo:", $e->getFile(), "\n";
				echo "<pre>";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		/*Lista las bases de datos existentes de mongo*/
		public function listdbs(){
            try{
                $listdatabases = new MongoDB\Driver\Command(["listDatabases" => 1]);
                $res = $this->connection->executeCommand("admin", $listdatabases);

                $databases = current($res->toArray());

                foreach ($databases->databases as $el) {
                
                    echo $el->name . "\n";
                }
            }catch (MongoDB\Driver\Exception\Exception $e){
            $filename = basename(__FILE__);
            echo "ERROR en $filename .\n";
            echo "<pre>";
            echo "Exception:", $e->getMessage(), "\n";
            echo "<pre>";
            echo "En archivo:", $e->getFile(), "\n";
            echo "<pre>";
            echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		/*realiza una consulta de una coleccion en específico*/
		public function consultaColeccion($coleccion){
            try{
                $query = new MongoDB\Driver\Query([]); 
                $filas = $this->connection->executeQuery($this->db.".".$coleccion, $query);
                return $filas->toArray();
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "<pre>";
				echo "Exception:", $e->getMessage(), "\n";
				echo "<pre>";
				echo "En archivo:", $e->getFile(), "\n";
				echo "<pre>";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		public function consultaFiltrada($coleccion,$busqueda){
            try{
                $query = new MongoDB\Driver\Query($busqueda); 
                $filas = $this->connection->executeQuery($this->db.".".$coleccion, $query);
                return $filas->toArray();
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "<pre>";
				echo "Exception:", $e->getMessage(), "\n";
				echo "<pre>";
				echo "En archivo:", $e->getFile(), "\n";
				echo "<pre>";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		public function consultaProjeccion($coleccion,$busqueda,$opciones){
            try{
                $query = new MongoDB\Driver\Query($busqueda,$opciones); 
                $filas = $this->connection->executeQuery($this->db.".".$coleccion, $query);
                return $filas->toArray();
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "<pre>";
				echo "Exception:", $e->getMessage(), "\n";
				echo "<pre>";
				echo "En archivo:", $e->getFile(), "\n";
				echo "<pre>";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		public function filtrar($dbc,$campo,$filtro){
			$filter = [ $campo => $filtro ]; 
			$query = new MongoDB\Driver\Query($filter);     
			$res = $this->connection->executeQuery($this->db.".".$dbc, $query);
			
			$fil = current($res->toArray());
			
			if (!empty($fil)) {
				return $fil;
			} else {
				return 0;
			}
		}

		public function insertar($dbc,$documento){
            try{
                $bulk = new MongoDB\Driver\BulkWrite;
                $bulk->insert($documento);			
                $this->connection->executeBulkWrite($this->db.".".$dbc, $bulk);
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "Exception:", $e->getMessage(), "\n";
				echo "En archivo:", $e->getFile(), "\n";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}

		public function eliminarCampo($dbc,$query,$campo){
			try{
				$bulk = new MongoDB\Driver\BulkWrite;
				$bulk->update($query,['$unset'=>$campo]);			
				$this->connection->executeBulkWrite($this->db.".".$dbc, $bulk);
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "Exception:", $e->getMessage(), "\n";
				echo "En archivo:", $e->getFile(), "\n";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}
		
		public function modificar($dbc,$antiguo,$nuevo){
			try{
				$bulk = new MongoDB\Driver\BulkWrite;
				$bulk->update($antiguo,['$set'=>$nuevo]);			
				$this->connection->executeBulkWrite($this->db.".".$dbc, $bulk);
			}catch (MongoDB\Driver\Exception\Exception $e){
				$filename = basename(__FILE__);
				echo "ERROR en $filename .\n";
				echo "Exception:", $e->getMessage(), "\n";
				echo "En archivo:", $e->getFile(), "\n";
				echo "En la linea:", $e->getLine(), "\n";    
			}
		}


		public function eliminar($dbc,$doc){
			$bulk = new MongoDB\Driver\BulkWrite;
			$bulk->delete($doc);			
			$this->connection->executeBulkWrite($this->db.".".$dbc, $bulk);
		}

	}
?>
