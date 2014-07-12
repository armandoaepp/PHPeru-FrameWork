<?php
function generarmodelo($atri, $cListar, $tabla)
{
    //atributos
    $atri   = trim($atri);
    $romper = explode("*", $atri);
    $aatri  = array();
    for ($i = 0; $i < count($romper); $i++) {
        if (trim($romper[$i]) != "") {
            $aatri[] = $romper[$i];
        }
    }
    $carpeta   = "./clases/Modelado/";
    $extension = ".php";
    $clase     = "Clase_" . $tabla;
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Modelo_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        $texto .= '/* Clase Generada desde Cix -PHP - Creado por @EPP */' . PHP_EOL;
        $texto .= 'class ' . $clase . '{' . PHP_EOL;
        $texto .= '//Constructor' . PHP_EOL;
        $texto .= 'public function ' . $clase . '(){}' . PHP_EOL;
        $texto .= '//Atributos' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            $texto .= 'private $' . $aatri[$i] . ';' . PHP_EOL;
        }
        $texto .= '//Propiedades' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            $texto .= 'public function set' . $aatri[$i] . '($' . $aatri[$i] . '_){ $this->' . $aatri[$i] . '=$' . $aatri[$i] . '_;}' . PHP_EOL;
            $texto .= 'public function get' . $aatri[$i] . '(){ return $this->' . $aatri[$i] . ';}' . PHP_EOL;
        }
        $texto .= '//Métodos' . PHP_EOL;
        //Start Metodo Listar
        $texto .= '//Método Listar' . PHP_EOL;
        $texto .= 'public function Listar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta=array();' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;       
        $texto .= '    $consulta="' . $cListar . '";' . PHP_EOL;
        $texto .= '    $rpta=$con->Listar($consulta);' . PHP_EOL;      
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '     $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // End Metodo Listar
                             
        //Start Metodo Registrar
        $texto .= '//Método Insertar' . PHP_EOL;        
        $texto .= 'public function Insertar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;        
        $texto .= '    $consulta="Insert into ' . $tabla . ' values(';
        $concat = "";
        for ($i = 0; $i < count($aatri); $i++) {
            $concat .= "'" . '$this->' . $aatri[$i] . "',";
        }
        $texto .= substr($concat, 0, -1);
        $texto .= ')";' . PHP_EOL;
        $texto .= '    $rpta=$con->MetodoRegistrar($consulta);' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Registrar
        
        //Start Metodo Actualizar
        $texto .= '//Método Actualizar' . PHP_EOL;        
        $texto .= 'public function Actualizar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;        
        $concat = '    $consulta="UPDATE ' . $tabla . ' SET ';
        for ($z = 1; $z < count($aatri); $z++) {
            $concat .= $aatri[$z] . "='" . '$this->' . $aatri[$z] . "',";
        }
        $concat = substr($concat, 0, -1);
        $concat .= " WHERE " . $aatri[0] . "='" . '$this->' . $aatri[0] . "'" . '";';
        $texto .= $concat . PHP_EOL;
        $texto .= '    $rpta=$con->MetodoRegistrar($consulta);' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Actualizar

        //Start Buscar Registro po ID
        $texto .= '//Método Buscar por ID' . PHP_EOL;
        $texto .= 'public function Buscar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta=array();' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;        
        $texto .= '    $consulta= "SELECT * FROM ' . $tabla . ' WHERE ' . $aatri[0] . "='" . '$this->' . $aatri[0] . "'" . '";' . PHP_EOL;
        $texto .= '    $rpta=$con->Listar($consulta);' . PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Buscar Registro po ID   
        
        //Start Metodo Eliminar(Actualizar Estado)
        $texto .= '//Método Eliminar(Actualizar Estado)' . PHP_EOL;
        $texto .= 'public function Eliminar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;
        $texto .= '    $consulta="UPDATE ' . $tabla . ' SET ' . $tabla . 'Estado=' . "'E' WHERE " . $aatri[0] . "='" . '$this->' . $aatri[0] . "'" . '";' . PHP_EOL;
        $texto .= '    $rpta=$con->MetodoRegistrar($consulta);' . PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Eliminar(Actualizar Estado)
        
        // Metodos Adicionales
        
        //Sart Metodo Recuperar(Actualizar Estado)
        $texto .= '//Método Recuperar' . PHP_EOL;
        $texto .= 'public function Recuperar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $con=new Conexion();' . PHP_EOL;
        $texto .= '    $consulta="UPDATE ' . $tabla . ' SET ' . $tabla . 'Estado=' . "'A' WHERE " . $aatri[0] . "='" . '$this->' . $aatri[0] . "'" . '";' . PHP_EOL;
        $texto .= '    $rpta=$con->MetodoRegistrar($consulta);' . PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Recuperar(Actualizar Estado) 
        
        //Start Metodo Consulta Simple from all
        $texto .= '//Método Listar' . PHP_EOL;
        $texto .= 'public function ListadoSimple_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta=array();' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "include_once 'conexion.php';" . PHP_EOL;
        $texto .= '$con=new Conexion();' . PHP_EOL;        
        $texto .= '    $consulta= "SELECT * FROM ' . $tabla . '";' . PHP_EOL;
        $texto .= '    $rpta=$con->Listar($consulta);' . PHP_EOL;       
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= '     $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Listar simple from all        
        
        //Start Metodo Eliminar_Serie (Actualizar Estado) con transacciones
        $texto .= '//Método Eliminar En serie (Actualizar Estado)' . PHP_EOL;
        $texto .= 'public function Eliminar_Serie_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= '$ids=$this->get'. $aatri[0].'();' . PHP_EOL;
        $texto .= ' if(count($ids)>0){' . PHP_EOL;
        $texto .= "    include_once 'conexion.php';" . PHP_EOL;
        $texto .= '    $cnx=$con->conectar();' . PHP_EOL;
        $texto .= '   // Start la transaccion' . PHP_EOL;
        $texto .= '    $cnx->autocommit(false);' . PHP_EOL;
        $texto .= '    $consulta="UPDATE ' . $tabla . ' SET ' . $tabla . 'Estado=' . "'E' WHERE " . $aatri[0] . "=? ; " . '";' . PHP_EOL;

        $texto .= '    $preparesql = $cnx->prepare($consulta);' . PHP_EOL;
        $texto .= '    foreach($ids as $indice => $valor){' . PHP_EOL;
        $texto .= '        $preparesql->bind_param("i", $valor);' . PHP_EOL;
        $texto .= '         $preparesql->execute();' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        $texto .= '    // ejecutamos la transaccion' . PHP_EOL;
        $texto .= '    $cnx->commit();' . PHP_EOL;
        $texto .= '    // numero de filas afectadas' . PHP_EOL;        
        $texto .= '    $rpta=$cnx->affected_rows;' . PHP_EOL;
        $texto .= '    $cnx->close();' . PHP_EOL;
        $texto .= ' }' . PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;        
        $texto .= '    // si hay algun error deshacemos la transaccion' . PHP_EOL;
        $texto .= '    $con->rollback();' . PHP_EOL;
        $texto .= '    $con->close();' . PHP_EOL;
        $texto .= '    $rpta=$e->getMessage();' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //End Metodo Eliminar_Series


         
        $texto .= '' . PHP_EOL;             
        $texto .= '}' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}
?>