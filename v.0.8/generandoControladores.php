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

    // $carpeta = "./app/controllers/";
    $carpeta   = CONTROLLERS."/";

    $cmTable = toCamelCase($tabla);


    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta .$cmTable."Controller";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;
        $texto .= '# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;

        $texto .= ' class '.$cmTable.'Controller' . PHP_EOL;
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
        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
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
        $texto  .= '    public function set'.$cmTable.'($params = array() )' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.toCamelCase($nameatri[$i]).'($'.strtolower($aatri[$i]).');'. PHP_EOL;
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

        # FUNCTION upd
        $texto  .= '    public function update'.$cmTable.'($params = array())' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($nameatri) > 0) {
                                    for ($i = 0; $i < count($nameatri); $i++) {
                                        if ($nameatri[$i] != "estado") {
                                            $texto .= '            $bean_'.($tabla).'->set'.toCamelCase($nameatri[$i]).'($'.strtolower($aatri[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $data = $'.($tabla).'->update($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '           throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        # FUNCTION UPDATE ESTADO
        $texto  .= '    public function updateEstado($params = array())' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

        $texto .= '            $bean_'.($tabla).'->set'.toCamelCase($nameatri[0]).'($'.strtolower($aatri[0]).');'. PHP_EOL;
        $texto .= '            $bean_'.($tabla).'->setEstado($estado);'. PHP_EOL;

        $texto  .= '' . PHP_EOL;
        $texto  .= '            $data = $'.($tabla).'->update($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '           throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # FUNCTION getById
        $texto  .= '    public function getById($id)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).'->set'.toCamelCase($nameatri[0]).'($id);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $data = $'.($tabla).'->getById( $bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
         $texto  .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


         # FUNCTION DELETE
        $texto  .= '    public function deleteById($id)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            $bean_'.($tabla).'->set'.toCamelCase($nameatri[0]).'($id);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '            $data = $'.($tabla).'->deleteById( $bean_'.($tabla).' ) ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '            return $data;'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '        catch (Exception $e)' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
         $texto  .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '        }' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;




        $texto .= '}' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>