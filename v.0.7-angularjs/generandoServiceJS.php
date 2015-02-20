<?php
function generandoServiceJS($atri, $tabla, $nameatri)
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
    if (file_exists("./clases/js/service")) {
        $carpeta = "./clases/js/service/";
    } else {
        mkdir("./clases/js/service", 0777);
        $carpeta = "./clases/js/service/";

    }

    $extension = ".js";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta .$tabla."Service";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '' . PHP_EOL;
        $texto .= '// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;


        $texto  .= '\'use strinct\';' . PHP_EOL;


        $texto  .= 'app.service(\''.$tabla.'Service\', function($http){' . PHP_EOL;

        $texto  .= '    this.get'.ucwords($tabla).'s = function()'. PHP_EOL;
        $texto  .= '    {'. PHP_EOL;
        $texto  .= '        var url_    = \'data/ajax/'.$tabla.'/index'.ucwords($tabla).'.php\';'. PHP_EOL;
        $texto  .= '        var params_   = {\'params\': {\'accion\': \'list\'}};'. PHP_EOL;
        $texto  .= '        '. PHP_EOL;

        $texto  .= '        return $http.get(url_,  params_);'. PHP_EOL;
        $texto  .= '    };'. PHP_EOL;
        $texto  .= ''. PHP_EOL;

        # metodo SET

        $texto  .= '    this.set'.ucwords($tabla).' = function(params_)'. PHP_EOL;
        $texto  .= '    {'. PHP_EOL;
        $texto  .= '        var url_    = \'data/ajax/'.$tabla.'/index'.ucwords($tabla).'.php\';'. PHP_EOL;
        $texto  .= '        params_.accion = \'set\';'. PHP_EOL;
        $texto  .= '       '. PHP_EOL;
        $texto  .= '        return $http.post(url_, params_ );'. PHP_EOL;
        $texto  .= '    };'. PHP_EOL;
        $texto  .= ''. PHP_EOL;

        # metodo GEI ID

        $texto  .= '    this.get'.ucwords($tabla).'ById = function(params_)'. PHP_EOL;
        $texto  .= '    {'. PHP_EOL;
        $texto  .= '        var url_    = \'data/ajax/'.$tabla.'/index'.ucwords($tabla).'.php\';'. PHP_EOL;
        $texto  .= '        var params_   = {\'params\': {\'accion\': \'list\', \'id\': id}};'. PHP_EOL;
        $texto  .= ''. PHP_EOL;

        $texto  .= '        return $http.get(url_, params_);'. PHP_EOL;
        $texto  .= '    };'. PHP_EOL;
        $texto  .= ''. PHP_EOL;

         # metodo UPDATE

        $texto  .= '    this.upd'.ucwords($tabla).' = function(params_)'. PHP_EOL;
        $texto  .= '    {'. PHP_EOL;
        $texto  .= '        var url_    = \'data/ajax/'.$tabla.'/index'.ucwords($tabla).'.php\';'. PHP_EOL;
         $texto .= '        params_.accion = \'upd\';'. PHP_EOL;
        $texto  .= '       '. PHP_EOL;
        $texto  .= '        return $http.post(url_, params_ );'. PHP_EOL;
        $texto  .= '    };'. PHP_EOL;
        $texto  .= ''. PHP_EOL;



         $texto  .= '});' . PHP_EOL;


        fwrite($abrir, $texto);
        fclose($abrir);
        return "Service Generado Correctamente";
    }
}
?>