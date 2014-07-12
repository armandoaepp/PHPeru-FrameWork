<?php
function generarbean($atri, $cListar, $tabla)
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
    $carpeta   = "./clases/Bean/";
    $extension = ".php";
    $clase     = "Bean_" . $tabla;
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Bean_" . $tabla;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        $texto .= '/* Clase Bean Generada  - Creado por @armandoaepp */' . PHP_EOL;
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



        $texto .= '}' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}
?>