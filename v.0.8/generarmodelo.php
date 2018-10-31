<?php
function generarmodelo($atri, $cListar, $tabla, $name_set_get)
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
    // $carpeta   = "./app/models/";
    $carpeta   = MODELS."/";

    $extension = ".php";
    // $clase     = ucwords($tabla);
    $clase     = toCamelCase($tabla);

    $texto = '';
    if (!empty($tabla))
    {
        $nomarchivo = $carpeta . "" . $clase ;
        $abrir      = fopen($nomarchivo . $extension, "w");


        $texto .= '<?php ' . PHP_EOL;
        $texto .= '# Class Model Generada - ByPower @armandaepp ' . PHP_EOL;
        $texto .= 'class ' . $clase . ' extends ClsConexion {' . PHP_EOL;

        # contructor
        $texto .= '    # CONSTRUCT ' . PHP_EOL;
        $texto .= '    public function __construct($cnx  = null)' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;
        $texto .= '        $this->conn = $cnx;' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;


        # METODOS
        //  START METODO LIST
        $texto .= PHP_EOL;
        $texto .= '    # Método getALl' . PHP_EOL;
        $texto .= '    public function getAll()' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;

        $texto .= '        try{' . PHP_EOL;
        // START SQL

             $texto .= '' . PHP_EOL;

             //QUERY
            $concat = "";
            $concat .= '            $this->query = "SELECT * FROM '.$tabla.'";';
            //end QUERY

            $texto .=  $concat.PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            $this->execute_query();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            $data = $this->rows ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            return $data;' . PHP_EOL;
            $texto .= PHP_EOL;

            $texto .= '        }catch(exception $e){' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '        }' . PHP_EOL;

        $texto .= '    }' . PHP_EOL;
        $texto .= PHP_EOL;
        //  END METODO LIST


        $texto .= '    # Método Insertar' . PHP_EOL;
        //Inicia Metodo INSERTAR
        $texto .= '    public function save($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;

        $texto .= '        try{' . PHP_EOL;

        for ($i = 0; $i < count($aatri); $i++) {
            $texto .= '            $'.$aatri[$i]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[$i]) . '();' . PHP_EOL;
        }
        $texto .= '' . PHP_EOL;

        //comenzamos a insertar Registros


        $concat = "";
        $campos = "";
        for ($i = 1; $i < count($aatri); $i++) {
            $campos .= "                                " . $aatri[$i] ;
            $concat .= "                                '" . '$' . $aatri[$i]."'" ;
            if ( $i < (count($aatri) - 1) )
            {
                $campos .= ",". PHP_EOL;
                $concat .= ",". PHP_EOL;
            }
        }

        // $texto .= substr($concat, 0, -1);
        $texto .= '            $this->query = "INSERT INTO ' . $tabla.PHP_EOL;
        $texto .= '                            ('.PHP_EOL;
        $texto .= ''                                . $campos.''.PHP_EOL;
        $texto .= '                            )'.PHP_EOL;
        $campos .= PHP_EOL;
        $texto .= '                            VALUES('.PHP_EOL;
        $texto .= $concat;
        $texto .= PHP_EOL;
        $texto .= '                            )";' . PHP_EOL;
        $texto .= PHP_EOL;

        $texto .= '            $this->execute_query();' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            $data = $this->status_exe  ;' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            return $data;' . PHP_EOL;
        $texto .= PHP_EOL;
        //fin de comenzar a insertar
        $texto .= PHP_EOL;
        $texto .= '         }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '             throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '         }' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        // fin del merodo INSERTAR


        $texto .= PHP_EOL;
        $texto .= '    # Método Actualizar' . PHP_EOL;
        //Inicia Metodo Actualizar
        $texto .= '    public function update($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;
        $texto .= '        try{' . PHP_EOL;
           for ($i = 0; $i < count($aatri); $i++) {
                $texto .= '            $'.$aatri[$i]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[$i]) . '();' . PHP_EOL;
            }
            $texto .= '' . PHP_EOL;

             //QUERY
             $concat='            $this->query = "UPDATE '.$tabla.' SET '. PHP_EOL;
             for ($i = 1; $i < count($aatri); $i++) {
                 $concat.= '                                '.$aatri[$i]." = '$".$aatri[$i];
                 if ( $i < (count($aatri) - 1) )
                 {
                     $concat .= ",". PHP_EOL;
                 }
             }
             // $concat=substr($concat,0,-1);
             $concat= $concat ;
             $concat.= PHP_EOL;
             $concat.="                            WHERE ".$aatri[0]." = '$".$aatri[0]."'";
             $concat.= PHP_EOL;
             $concat.="                            LIMIT 1 ".'";';
             $texto.=$concat.PHP_EOL;
         // end QUERY



            $texto .= '            $this->execute_query();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            $data = $this->status_exe  ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            return $data;' . PHP_EOL;
            $texto .= PHP_EOL;
        //fin de comenzar a actualizar
        $texto .= '         }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '         }' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;


        $texto .= PHP_EOL;
        //METODO Actualizar Estado
        $texto .= '    # Método Eliminar(Actualizar Estado)' . PHP_EOL;
        $texto .= '    public function updateEstado($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;
        $texto .= '        try{' . PHP_EOL;
        //SQL

            $texto .= '            $'.$aatri[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
            // $texto .= '            $'.$aatri[count($aatri)-1]  .' = $bean_'.$tabla.'->get' . ucwords($name_set_get[count($aatri)-1]) . '();' . PHP_EOL;
            $texto .= '            $estado = $bean_'.$tabla.'->getEstado();' . PHP_EOL;
            $texto .= '' . PHP_EOL;

             //QUERY
             $concat = "";
             $concat .= '            $this->query = "UPDATE '.$tabla.' SET ';
             $concat .= PHP_EOL;
            //  $concat.= '            '.$aatri[count($aatri)-1]." = '".''.$aatri[count($aatri)-1];
             $concat.= '                                estado'." = '".'$estado'."'";
             $concat .= PHP_EOL;
             $concat.="                            WHERE ".$aatri[0]."='$".$aatri[0]."'";
             $concat.= PHP_EOL;
             $concat.="                            LIMIT 1 ".'";';
             $texto .=  $concat.PHP_EOL;

             $texto .= PHP_EOL;
             $texto .= '            $this->execute_query();' . PHP_EOL;
             $texto .= PHP_EOL;
             $texto .= '            $data = $this->status_exe  ;' . PHP_EOL;
             $texto .= PHP_EOL;
             $texto .= '            return $data;' . PHP_EOL;
             $texto .= PHP_EOL;

        //END SQL
        $texto .= '        }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        // fin del metodo Eliminar actualizar


        //  START METODO BUSCAR POR ID
        $texto .= PHP_EOL;
        $texto .= '    # Método Buscar por ID' . PHP_EOL;
        $texto .= '    public function getById($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;
        $texto .= '        try{' . PHP_EOL;
        // START SQL

        $texto .= '            $'.$aatri[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]) . '();' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        //QUERY
        $concat = "";
        $concat .= '            $this->query = "SELECT * FROM '.$tabla;
        $concat.=" WHERE ".$aatri[0]." = '$".$aatri[0]."'".' LIMIT 1";';
        //end QUERY
        $texto .=  $concat.PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            $this->execute_find();' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            $data = $this->rows ;' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            return $data;' . PHP_EOL;
        $texto .= PHP_EOL;

        // END SQL

        $texto .= '        }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '            throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        //  END METODO BUSCAR POR ID


        //metodo DELETE(ELIMINAR DE LA BASE DE DATOS)
        $texto .= PHP_EOL;
        $texto .= '    # Método deleteById' . PHP_EOL;
        $texto .= '    public function deleteById($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '    {' . PHP_EOL;
        $texto .= '        try{' . PHP_EOL;
        //SQL

            $texto .= '            $'.$aatri[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            //QUERY
            $concat = "";
            $concat .= '            $this->query = "DELETE FROM '.$tabla;
            // $concat .= PHP_EOL;
            $concat.=" WHERE ".$aatri[0]." = '$".$aatri[0]."'".' LIMIT 1";';
            $texto .=  $concat.PHP_EOL;
            $texto .= '' . PHP_EOL;
            //endQUERY

            $texto .= '            $this->execute_query();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            $data = $this->status_exe  ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            return $data;' . PHP_EOL;
            $texto .= PHP_EOL;

            $texto .= '        }catch(exception $e){' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '            throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '        }' . PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        // fin del metodo Eliminar actualizar
        $texto .= PHP_EOL;



        $texto .= '}' . PHP_EOL;
        $texto .= '?>';
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}

function explodeToCamelCase($string) {
    $value = explode('_', $string) ;
}