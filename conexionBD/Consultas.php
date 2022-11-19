<?php
//singleton
class Usuarios
{
    private static $instancia;
    private $dbh;
 
    private function __construct()
    {
        try {
	    $servidor="localhost";
	    $base="purificadora";
	    $usuario="root";
	    $contrasenia="";
	    $this->dbh = new PDO('mysql:host='.$servidor.';dbname='.$base, $usuario, $contrasenia);
            $this->dbh->exec("SET CHARACTER SET utf8");
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
 
    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
 
    public function get_user($correo, $pass)
    {
        try {
            $query = $this->dbh->prepare("SELECT * FROM usuarios WHERE correo LIKE ? AND contra LIKE ?");
            $query->bindParam(1, $correo);
            $query->bindParam(2, $pass);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }




    public function get_ventas()
    {
        try {
            $query = $this->dbh->prepare("SELECT * FROM ventas WHERE 1");
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function insertar($name, $correo, $pass)
    {
        try {
            $query = $this->dbh->prepare("INSERT INTO usuarios (nombreCompleto, correo, contra) VALUES (?, ?, ?)");
            $query->bindParam(1, $name);
            $query->bindParam(2, $correo);
            $query->bindParam(3, $pass);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function insertarVenta($name, $domicilio, $garrafon)
    {
        try {
            $query = $this->dbh->prepare("INSERT INTO ventas (nameCliente, domicilio, totGarrafones) VALUES (?, ?, ?)");
            $query->bindParam(1, $name);
            $query->bindParam(2, $domicilio);
            $query->bindParam(3, $garrafon);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }


    public function BorrarVenta($p1)
    {
        try {  
            $query = $this->dbh->prepare("DELETE FROM ventas WHERE id_venta LIKE ?");
            $query->bindParam(1, $p1);
            $query->execute();
            return $query->fetchAll();
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
 
    public function Actualizar($p1,$p2)
    {
        try {
            $query = $this->dbh->prepare("UPDATE tabla SET campo1=? WHERE campo2 LIKE ?");
            $query->bindParam(1, $p1);
            $query->bindParam(2, $p2);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function Actualizarv($p1,$p2,$p3,$p4)
    {
        try {
            $query = $this->dbh->prepare("UPDATE ventas SET nameCliente=?, domicilio=?, totGarrafones=? WHERE id_venta LIKE ?");
            $query->bindParam(1, $p1);
            $query->bindParam(2, $p2);
            $query->bindParam(3, $p3);
            $query->bindParam(4, $p4);
            $query->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

   
 
    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }
}
// Reseñas
public function insertarResena($name, $resena)
{
    try {
        $query = $this->dbh->prepare("INSERT INTO resenas (remitente, comentario) VALUES (?, ?)");
        $query->bindParam(1, $name);
        $query->bindParam(2, $resena);
        $query->execute();
        return $query->fetchAll();
        $this->dbh = null;
    }catch (PDOException $e) {
        $e->getMessage();
    }
}

public function getResenas()
{
    try {
        $query = $this->dbh->prepare("SELECT * FROM resenas WHERE 1");
        $query->execute();
        return $query->fetchAll();
        $this->dbh = null;
    }catch (PDOException $e) {
        $e->getMessage();
    }
}
?>