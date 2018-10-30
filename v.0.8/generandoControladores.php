<?php
function generandoControladores($atri, $tabla, $nameatri)
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
    // if (file_exists("./App/Controllers/" . $tabla)) {
    //     $carpeta = "./App/Controllers/" . $tabla . "/";
    // } else {
    //     mkdir("./App/Controllers/" . $tabla, 0777);
    //     $carpeta = "./App/Controllers/" . $tabla . "/";
    // }

    $carpeta = "./App/Controllers/";

    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta .ucwords($tabla)."Controller";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        $texto .= '# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;

        $texto .= ' class '.ucwords($tabla).'Controller' . PHP_EOL;
        $texto  .= '{' . PHP_EOL;
        # CONTRUCTOR
        $texto  .= '    private $cnx;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '    public function __construct($cnx = null)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        $this->cnx = $cnx;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    ' . PHP_EOL;



        # FUNCTION get
        $texto  .= '    public function getAll()' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $'.($tabla).'  = new '.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $data = $'.($tabla).'->getAll();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            return $data ;'. PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        // $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION set
        $texto  .= '    public function set'.ucwords($tabla).'($params = array() )' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto  .= '            $'.($tabla).'  = new '.ucwords($tabla).'($this->cnx);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.ucwords($nameatri[$i]).'($'.strtolower($aatri[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '            $data = $'.($tabla).'->save($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            return $data ;'. PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        // $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION get
        $texto  .= '    public function getById($id)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $'.($tabla).'  = new '.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).'->set'.ucwords($nameatri[0]).'($id);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $data = $'.($tabla).'->getById() ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => "Listado correcto", "error" => false, "data" => $data);'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
         $texto  .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        // $texto  .= '            $rpta = array("msg" => $e->getMessage(), "error" => true, "data" => array());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        // $texto  .= '        return $rpta ;' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION upd
        $texto  .= '    public function update'.ucwords($tabla).'($params = array())' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $'.($tabla).'  = new '.ucwords($tabla).'($this->cnx);' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.ucwords($tabla).'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.ucwords($nameatri[$i]).'($'.strtolower($aatri[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '            $data = $'.($tabla).'->update($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '           throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        // $texto  .= '        return $rpta ;' . PHP_EOL;

        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto .= '}' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>