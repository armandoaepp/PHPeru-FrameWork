<?php
function generandoControladores($atri, $tabla)
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

    /* if (file_exists("./App/Controllers/" . $tabla)) {
        $carpeta = "./App/Controllers/" . $tabla . "/";
    } else {
        mkdir("./App/Controllers/" . $tabla, 0777);
        $carpeta = "./App/Controllers/" . $tabla . "/";
    }
     */

    $carpeta = "./App/Controllers/";
    $extension = ".php";
    $clase     = ucwords($tabla);
    $texto = '';

    if (!empty($tabla)) {
        $nomarchivo = $carpeta . ucwords($tabla)."Controller";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        $texto .= 'class ' . $clase . 'Controller ' . PHP_EOL;
        $texto .= '{' . PHP_EOL;


        $texto .= PHP_EOL;
        $texto .= 'private $cnx;' . PHP_EOL;
        $texto .= PHP_EOL;

        # contructor
        $texto .= '# CONSTRUCT ' . PHP_EOL;
        $texto .= 'public function __construct($cnx  = null)' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        $texto .= '$this->conn = $cnx;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= PHP_EOL;


        # start getALL
        $texto .= 'function getAll()' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
            $texto .= 'try {' . PHP_EOL;

            $texto .= '$'.$tabla . ' = new ' .$clase . '();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '$data = $' . $tabla . '->getAll();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= 'return $data;' . PHP_EOL;

            $texto .= '}' . PHP_EOL;
            $texto .= 'catch (Exception $e)' . PHP_EOL;
            $texto .= '{' . PHP_EOL;
            $texto .= 'throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= '}' . PHP_EOL;


        $texto .= '}' . PHP_EOL;
        $texto .= PHP_EOL;
        # END getALL

         # start getALL
        $texto .= 'function set'.ucwords($tabla).'( $params = array() )' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
            $texto .= 'try {' . PHP_EOL;
            $texto .= PHP_EOL;

            $texto .= 'extract($params);' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '$'.$tabla . ' = new ' .$clase . '();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '$bean_'.$tabla . ' = new Bean' .$clase . '();' . PHP_EOL;
            $texto .= PHP_EOL;

            if (count($aatri) > 0) {
                for ($i = 0; $i < count($aatri); $i++) {
                    if ($aatri[$i] == "estado") {
                        $texto .= '$' . $tabla . '->set' . ucwords($aatri[$i]) . '(1);' . PHP_EOL;
                    } else {
                        $texto .= '$' . $tabla . '->set' . ucwords($aatri[$i]) . '($'. $aatri[$i] . ');' . PHP_EOL;
                    }
                }
            }

             $texto .= '$'.$tabla . ' = new ' .$clase . '();' . PHP_EOL;
             $texto .= PHP_EOL;
             $texto .= '$data = $' . $tabla . '->getAll();' . PHP_EOL;
             $texto .= PHP_EOL;
             $texto .= 'return $data;' . PHP_EOL;

             $texto .= '}' . PHP_EOL;
             $texto .= 'catch (Exception $e)' . PHP_EOL;
             $texto .= '{' . PHP_EOL;
             $texto .= 'throw new Exception($e->getMessage());' . PHP_EOL;
             $texto .= '}' . PHP_EOL;


         $texto .= '}' . PHP_EOL;
         $texto .= PHP_EOL;
         # END getALL



        $texto .= 'function set'.ucwords($tabla).'( $params = array() ){' . PHP_EOL;

        $texto .= 'try{' . PHP_EOL;
        $texto .= 'extract($params);' . PHP_EOL;
        $texto .= '$' . $tabla . '= new ' . ucwords($tabla). '();' . PHP_EOL;


        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                if ($aatri[$i] == "estado") {
                    $texto .= '$' . $tabla . '->set' . ucwords($aatri[$i]) . '(1);' . PHP_EOL;
                } else {
                    $texto .= '$' . $tabla . '->set' . ucwords($aatri[$i]) . '($'. $aatri[$i] . ');' . PHP_EOL;
                }
            }
        }
        $texto .= '$rpta=$en' . $tabla . '->Insertar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= ' throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= ' }' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Actualizar
        $texto .= "" . PHP_EOL;
        $texto .= 'function CActualizar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        if (count($aatri) > 0) {
            for ($i = 0; $i < count($aatri); $i++) {
                if ($aatri[$i] != "estado") {
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '(validar($_POST["' . $aatri[$i] . '_"]));' . PHP_EOL;
                } else {
                    $texto .= 'if(isset($_POST["' . $aatri[$i] . '_"])){' . PHP_EOL;
                    $texto .= '$estado="A";' . PHP_EOL;
                    $texto .= '}else{' . PHP_EOL;
                    $texto .= '$estado="E";' . PHP_EOL;
                    $texto .= '}' . PHP_EOL;
                    $texto .= '$en' . $tabla . '->set' . $aatri[$i] . '($estado);' . PHP_EOL;
                }
            }
        }
        $texto .= '$rpta=$en' . $tabla . '->Actualizar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Dar de Baja
        $texto .= "" . PHP_EOL;
        $texto .= 'function CEliminar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($_GET["id"]);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Eliminar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        //funcion Recuperar
        $texto .= "" . PHP_EOL;
        $texto .= 'function CRecuperar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($_GET["id"]);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Recuperar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        $texto .= 'function CListar_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Listar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        $texto .= 'function CListadoSimple_' . $tabla . '(){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->ListadoSimple_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= 'function CBuscar_' . $tabla . '($id){' . PHP_EOL;
        $texto .= '$en' . $tabla . '=new Clase_' . $tabla . '();' . PHP_EOL;
        $texto .= '$en' . $tabla . '->set' . $aatri[0] . '($id);' . PHP_EOL;
        $texto .= '$rpta=$en' . $tabla . '->Buscar_' . $tabla . '();' . PHP_EOL;
        $texto .= 'return $rpta;';
        $texto .= '}' . PHP_EOL;

        $texto .= '{' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>