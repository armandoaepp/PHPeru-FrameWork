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
    $clase     = "Cls" . $tabla;
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Cls" . ucwords($tabla);
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        $texto .= '/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */' . PHP_EOL;
        $texto .= 'class ' . $clase . ' extends ClsConexion {' . PHP_EOL;

        // $texto .= '//Métodos' . PHP_EOL;
        $texto .= '# Método Insertar' . PHP_EOL;
        //Inicia Metodo Registrar
        $texto .= 'public function set_'. $tabla . '($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        // $texto .= '$rpta;' . PHP_EOL;
        // $texto .= 'try{' . PHP_EOL;

        for ($i = 0; $i < count($aatri); $i++) {
            $texto .= '$'.$aatri[$i]  .' = $bean_'.$tabla.'->get' . ucwords($aatri[$i]) . '();' . PHP_EOL;
        }
        $texto .= '' . PHP_EOL;

        //comenzamos a insertar Registros
        $texto .= '$this->query = "CALL usp_set_'.$tabla.'(';

        $concat = "";
        for ($i = 0; $i < count($aatri); $i++) {
            $concat .= "'$" . $aatri[$i] . "',";
        }
        $texto .= substr($concat, 0, -1);
        $texto .= ')";' . PHP_EOL;
        $texto .= '$this->execute_query();' . PHP_EOL;
        $texto .= '$data = $this->rows ;' . PHP_EOL;
        $texto .= 'return $data;' . PHP_EOL;
        //fin de comenzar a insertar
        $texto .= PHP_EOL;
        // $texto .= '}catch(exception $e){' . PHP_EOL;
        // $texto .= ' return $e->getMessage();' . PHP_EOL;
        // $texto .= ' }' . PHP_EOL;
        // $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // fin del merodo INsERTAR

        $texto .= '# Método Actualizar' . PHP_EOL;
        //Inicia Metodo Actualizar
        $texto .= 'public function upd_'. $tabla . '($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        // $texto .= '$rpta;' . PHP_EOL;
        // $texto .= 'try{' . PHP_EOL;
           for ($i = 0; $i < count($aatri); $i++) {
                $texto .= '$'.$aatri[$i]  .' = $bean_'.$tabla.'->get' . ucwords($aatri[$i]) . '();' . PHP_EOL;
            }
            $texto .= '' . PHP_EOL;

            //comenzamos a insertar Registros
            $texto .= '$this->query = "CALL usp_upd_'.$tabla.'(';

            $concat = "";
            for ($i = 0; $i < count($aatri); $i++) {
                $concat .= "'$" . $aatri[$i] . "',";
            }
            $texto .= substr($concat, 0, -1);
            $texto .= ')";' . PHP_EOL;
            $texto .= '$this->execute_query();' . PHP_EOL;
            $texto .= '$data = $this->rows ;' . PHP_EOL;
            $texto .= 'return $data;' . PHP_EOL;
        //fin de comenzar a actualizar
        $texto .= PHP_EOL;
        // $texto .= '}catch(exception $e){' . PHP_EOL;
        // $texto .= ' return $e->getMessage();' . PHP_EOL;
        // $texto .= '}' . PHP_EOL;
        // $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;

        //metodo Eliminar(Actualizar Estado)
        $texto .= '# Método Eliminar(Actualizar Estado)' . PHP_EOL;
        $texto .= 'public function upd_' . $tabla . '_Estado($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        // $texto .= '$rpta;' . PHP_EOL;
        // $texto .= 'try{' . PHP_EOL;
        //SQL

            $texto .= '$'.$aatri[0]  .' = $bean_'.$tabla.'->get' . ucwords($aatri[0]). '();' . PHP_EOL;
            $texto .= '$'.$aatri[count($aatri)-1]  .' = $bean_'.$tabla.'->get' . ucwords($aatri[count($aatri)-1]) . '();' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            //comenzamos a insertar Registros
            $texto .= '$this->query = "CALL usp_upd_'.$tabla.'_Estado(';

            $concat = "";
                $concat .= "'$" . $aatri[0] . "',";
                $concat .= "'$" . $aatri[count($aatri)-1] . "',";
            $texto .= substr($concat, 0, -1);
            $texto .= ')";' . PHP_EOL;
            $texto .= '$this->execute_query();' . PHP_EOL;
            $texto .= '$data = $this->rows ;' . PHP_EOL;
            $texto .= 'return $data;' . PHP_EOL;

        //SQL
        // $texto .= '}catch(exception $e){' . PHP_EOL;
        // $texto .= ' $rpta=$e->getMessage();' . PHP_EOL;
        // $texto .= '}' . PHP_EOL;
        // $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // fin del metodo Eliminar actualizar

        //  START METODO BUSCAR POR ID
        $texto .= '# Método Buscar por ID' . PHP_EOL;
        $texto .= 'public function get_' . $tabla . '_by_'.$aatri[0].'($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        // $texto .= '$rpta=array();' . PHP_EOL;
        // $texto .= 'try{' . PHP_EOL;
        // START SQL

                $texto .= '$'.$aatri[0]  .' = $bean_'.$tabla.'->get' . ucwords($aatri[0]) . '();' . PHP_EOL;
                // $texto .= '$'.$aatri[count($aatri)-1]  .' = $bean_'.$tabla.'->get' . $aatri[count($aatri)-1] . ';' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            //comenzamos a insertar Registros
            $texto .= '$this->query = "CALL usp_get_'.$tabla.'_by_'.$aatri[0].'(';

            $concat = "";
                $concat .= "'$" . $aatri[0] . "',";
                // $concat .= "'$" . $aatri[count($aatri)-1] . "',";
            $texto .= substr($concat, 0, -1);
            $texto .= ')";' . PHP_EOL;
            $texto .= '$this->execute_query();' . PHP_EOL;
            $texto .= '$data = $this->rows ;' . PHP_EOL;
            $texto .= 'return $data;' . PHP_EOL;

        // END SQL

        // $texto .= '}catch(exception $e){' . PHP_EOL;
        // $texto .= ' return $e->getMessage();}' . PHP_EOL;
        // $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //  END METODO BUSCAR POR ID


        /*//metodo Listar
        $texto .= '//Método Listar' . PHP_EOL;
        $texto .= 'public function Listar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta=array();' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "include_once 'conexion.php';" . PHP_EOL;
        $texto .= '$con=new Conexion();' . PHP_EOL;
        //Listamos
        $texto .= '$consulta="' . $cListar . '";' . PHP_EOL;
        $texto .= '$rpta=$con->Listar($consulta);' . PHP_EOL;
        //fin de listar
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= ' $rpta=$e->getMessage();}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // fin del metodo Listar}
        */


       /* //metodo Consulta Simple
        $texto .= '//Método Listar' . PHP_EOL;
        $texto .= 'public function ListadoSimple_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta=array();' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "include_once 'conexion.php';" . PHP_EOL;
        $texto .= '$con=new Conexion();' . PHP_EOL;
        //Listamos
        $texto .= '$consulta= "SELECT * FROM ' . $tabla . '";' . PHP_EOL;
        $texto .= '$rpta=$con->Listar($consulta);' . PHP_EOL;
        //fin de listar
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= ' $rpta=$e->getMessage();}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // fin del metodo Listar}*/


      /*  //metodo Recuperar(Actualizar Estado)
        $texto .= '//Método Recuperar' . PHP_EOL;
        $texto .= 'public function Recuperar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$rpta;' . PHP_EOL;
        $texto .= 'try{' . PHP_EOL;
        $texto .= "include_once 'conexion.php';" . PHP_EOL;
        $texto .= '$con=new Conexion();' . PHP_EOL;
        //Listamos
        $texto .= '$consulta="UPDATE ' . $tabla . ' SET ' . $tabla . 'Estado=' . "'A' WHERE " . $aatri[0] . "='" . '$this->' . $aatri[0] . "'" . '";' . PHP_EOL;
        $texto .= '$rpta=$con->MetodoRegistrar($consulta);' . PHP_EOL;
        //fin de listar
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= ' $rpta=$e->getMessage();}' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        // fin del metodo Recuperar}*/




        $texto .= '}' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}
?>