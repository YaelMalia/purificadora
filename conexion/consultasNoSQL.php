<?php
    session_start();
    require_once 'conexionNoSQL.php';
    $connNoSQL = connNoSQL::singleton();
    if(isset($_POST['accion'])  && !empty($_POST['accion'])){
        $action = $_POST['accion'];
        switch($action){

            case 'consultartodo':

                $projeccion = ["projection" => ["productos.inventario" =>1, "_id"=>0] ];
                $resultado = $connNoSQL ->
                    consultaProjeccion("articulos", ["tienda" => "Gota de angel"], $projeccion);
                
                if(isset($resultado[0] -> productos -> inventario)){
                    $resultado = $resultado[0] -> productos -> inventario;
                    echo json_encode($resultado);
                }else{
                    echo "No articulos disponibles";
                }

            break;


            case 'existe':
                $projeccion = ["projection" => ["tienda"=>1,"_id"=>0]];
                $tema = $connNoSQL->consultaProjeccion("articulos",["tienda"=>"Gota de angel"],$projeccion);
                if(isset($tema[0]->tienda)){
                    echo "si";
                }else{
                    echo "error";
                }
            break;
            case 'crearbase':
                $connNoSQL->insertar("articulos",["tienda"=>"Gota de angel"]);
                
            break;
            case 'guardar':

                $projeccion = ["projection" => ["tienda"=>1,"_id"=>0]];
                $tema = $connNoSQL->consultaProjeccion("articulos",["tienda"=>"Gota de angel"],$projeccion);
                if(!isset($tema[0]->tienda)){
                    $connNoSQL->insertar("articulos",["tienda"=>"Gota de angel"]);
                }
                $datos = $_POST['datos'];
                $n = $_POST['Articulo'];
                $connNoSQL->modificar("articulos",["tienda"=>"Gota de angel"],["productos.inventario.".$n=>$datos]);      
                
                echo "Producto insertado correctamente";

            break;  
            
            case 'consultararticulo':
                    $articulo = $_POST['Articulo'];
                    $projeccion = ["projection" => ["productos.inventario.".$articulo => 1, "_id" => 0]];

                    $resultado = $connNoSQL -> consultaProjeccion("articulos", ["tienda" => "Gota de angel"], $projeccion);

                    if(isset($resultado[0] -> productos -> inventario -> $articulo)){
                        $resultado = $resultado[0] -> productos -> inventario -> $articulo;
                        echo json_encode($resultado);
                        // echo $resultado;
                    }else{
                        echo "Art??culo no encontrado";
                    }
            break;
            
            
            case 'eliminar':
                $articulo = $_POST['Articulo'];
                $campo = ["productos.inventario." .$articulo => 1];
                $connNoSQL -> eliminarCampo("articulos", ["tienda" => "Gota de angel"], $campo);

                echo "Producto eliminado correctamente";
            break;

            case 'modificar':
                $projeccion = ["projection" => ["tienda"=>1,"_id"=>0]];
                $tema = $connNoSQL->consultaProjeccion("articulos",["tienda"=>"Gota de angel"],$projeccion);
                if(!isset($tema[0]->tienda)){
                    $connNoSQL->insertar("articulos",["tienda"=>"Gota de angel"]);
                }
                $datos = $_POST['datos'];
                $n = $_POST['Articulo'];
                $connNoSQL->modificar("articulos",["tienda"=>"Gota de angel"],["productos.inventario.".$n=>$datos]);      
                
                echo "Producto modificado correctamente";
            
            break;
        }
    }
?>