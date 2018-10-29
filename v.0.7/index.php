<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PHPeru</title>
</head>

<body>
  <?php require_once 'CPHPeru.php';
  $phperu= new PHPPeru() ;?>
  <form id="form1" name="form1" method="post" action="creandoarchivos.php" onsubmit="return confirmar();">
    <table width="790" height="59" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="177" border="0" style="float:left">
          <tr>
            <td>Tablas Encontradas</td>
          </tr>
          <tr>
            <td><?php
              $acumu="";
              $rpta1=$phperu->ListarTablas();
              if(count($rpta1)>0){
               for($i=0;$i<count($rpta1["cuerpo"]);$i++){
                 echo '<a href="?table='.$rpta1["cuerpo"][$i][0].'" > '.$rpta1["cuerpo"][$i][0].'</a>  <br/>';
               }
             }
             ?></td>
           </tr>
         </table>
         <?php
         if(isset($_GET["table"])){
          $tablaGet=$_GET["table"];
        } else{ $tablaGet="" ; }
        ?>
        <table width="528" border="0" style="float:left">
          <tr>
            <td width="477"> Campos Encontrados en la Tabla:&nbsp;&nbsp;<strong><?php echo $tablaGet;?>
              <input type="hidden" name="nomtabla" id="nomtabla" value="<?php echo $tablaGet ;?>" />
            </strong></td>
          </tr>
          <tr>
            <td><table width="521" height="55" border="1">
              <tr>
                <td colspan="4"><input type="button" name="bttodo" id="bttodo" value="Seleccionar Todo" onclick="ckb('form1','true')"/>
                  <input type="button" name="btlimpiar" id="btlimpiar" onclick="ckb('form1','false')" value="Limpiar Seleccion" /></td>
                </tr>
                <tr>
                  <td width="259">Nombre_Campo</td>
                  <td width="78">Tabla</td>
                  <td width="78">Enlace/Mostrar</td>
                  <td width="78">Encabezado(Alias)</td>
                </tr>
                <?php
                $arrayelementostabla=array();
                if($tablaGet!="")
                 $rpta=$phperu->ListarCampos($tablaGet);
               else $rpta=0;
              // var_dump($rpta["cuerpo"]);
               if(count($rpta)>0){

                 for($i=0;$i<count($rpta["cuerpo"]);$i++){
                   $arrayelementostabla[]=$rpta['cuerpo'][$i]['Field'];

                   ?>
                   <tr>
                    <td><input type="checkbox" name="sele[]" value="<?=$rpta['cuerpo'][$i]['Field']."/".$i ?>" />
                      <?php echo $rpta["cuerpo"][$i]["Field"]; ?></td>
                      <td><label>
                        <select name="ttabla<?=$i?>" id="ttabla<?=$i?>">
                          <?php
                          if(count($rpta1)>0){
                            for($p=0;$p<count($rpta1["cuerpo"]);$p++){
                             ?>
                             <option  value="<?=$rpta1["cuerpo"][$p][0]?>" <?php if($_GET["table"]==$rpta1["cuerpo"][$p][0]){echo "selected='selected'";}
                               ?>>
                               <?=$rpta1["cuerpo"][$p][0]?>
                             </option>
                             <?php
                           }
                         }?>
                       </select>
                     </label></td>
                     <td><label>
                      <input name="tenlace<?=$i?>" type="text" id="tenlace<?=$i?>" value="Nulo" size="17" />
                    </label></td>
                    <td><label>
                      <input name="tmostrar<?=$i?>" type="text" id="tmostrar<?=$i?>" value="<?=$rpta['cuerpo'][$i]['Field']?>" size="13" />
                    </label></td>
                  </tr>
                  <?php
                  $acumu.=$rpta['cuerpo'][$i]['Field']."*";
                }
              }
              ?>
              <tr>
                <td><strong>
                  <input type="hidden" name="atributos" id="atributos" value="<?=$acumu?>" />
                  <input type="submit" onclick=";" name="btenviar" id="btenviar" value="Generar" />
                </strong></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
  <script type="text/javascript">
   function confirmar(){
     if(confirm("Esta Seguro de Generar Los Cambios")){return true;}else{return false;}
   }
   function ckb(frm,estado){
    form=document.getElementById(frm);
    var cant=form.elements.length;
    for(i=0;i<cant;i++){
      if(form.elements[i].type=="checkbox"){
        if(estado=="true"){form.elements[i].checked=true;}
        if(estado=="false"){form.elements[i].checked=false;}

      }
    }

  }

</script>
</body>
</html>