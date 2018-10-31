<?php
function generarbean($atri, $cListar, $tabla,  $nameMetodo )
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
    // $carpeta   = "./app/beans/";
    $carpeta   = BEANS."/";

    $extension = ".php";

    $cmTable     = toCamelCase($tabla);
    $clase     = "Bean" .$cmTable;

    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Bean" . $cmTable;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        $texto .= '# Clase Bean Generada - ByPower @armandoaepp ' . PHP_EOL;
        $texto .= 'class ' . $clase . '{' . PHP_EOL;
        $texto .= '    # Constructor' . PHP_EOL;
        // $texto .= 'public function ' . $clase . '(){}' . PHP_EOL;
        $texto .= '    public function __construct(){}' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '    # Atributos' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            $texto .= '    private $' . $aatri[$i] . ';' . PHP_EOL;
        }
        $texto .= '' . PHP_EOL;

        $texto .= '    # METODOS' . PHP_EOL;
        for ($i = 0; $i < count($aatri); $i++) {
            // $texto .= '    public function set' . ucwords($nameMetodo[$i]) . '($' . $aatri[$i] . '_){ $this->' . $aatri[$i] . '=$' . $aatri[$i] . '_;}' . PHP_EOL;
            $texto .= '    public function set' . toCamelCase($nameMetodo[$i]) . '($' . $aatri[$i] . '_)' . PHP_EOL;
            $texto .= '    {' . PHP_EOL;
            $texto .= '        $this->' . $aatri[$i] . ' = Validation::validate( $' . $aatri[$i] . '_ );' . PHP_EOL;
            $texto .= '    }' . PHP_EOL;
            $texto .= PHP_EOL;
            // $texto .= '    public function get' . ucwords($nameMetodo[$i]) . '(){ return $this->' . $aatri[$i] . ';}' . PHP_EOL;
            $texto .= '    public function get' . toCamelCase($nameMetodo[$i]) . '()' . PHP_EOL;
            $texto .= '    {' . PHP_EOL;
            $texto .= '        return $this->' . $aatri[$i] . ';' . PHP_EOL;
            $texto .= '    }' . PHP_EOL;
            $texto .= PHP_EOL;
        }


        $texto .= '}' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}
?>