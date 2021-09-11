<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    include 'config.php';
    $rfc = $db->real_escape_string($_REQUEST['rfc']);
    $tipopersona='';
    $status='';
    $url="valid.png";
    $descripciones=array('Reporte del buró de crédito', 
    'Resumen ejecutivo', 
    'Copias fotost&aacute;ticas legibles de escrituras de inmuebles ofrecidos en garant&iacute;a o referencia con datos de inscripci&oacute;n en el registro p&uacute;blico correspondiente', 
    'Estados financieros de los últimos tres ejercicios que incluyan: balance general, relaciones analíticas de las principales citas., edo. de resultados y edo. de cambios en la situación financiera. Con firma autógrafa de su representante legal y contador. (Anexar copia fotostática de la cédula profesional del contador y en su caso los dictámenes aplicables a los estados financieros).', 
    'Estados financieros 2018', 
    'Estados financieros 2019',
     'Estados financieros 2020',
     'Estados financieros internos con firma autógrafa de su represéntate legal y contador, incluyendo, relaciones analíticas de las principales cuentas, con una antigüedad no mayor a 60 días.' , 
     'Estados financieros parciales 2021', 
     'Archivos de garantarias para crédito',
     'Copias fotostáticas legibles de las declaraciones de impuestos 2019 (con cadena de recepción)', 
     'Copias fotostáticas legibles de las declaraciones de impuestos 2020 (con cadena de recepción)', 
     'Copias fotostáticas legibles de la cédula de identificación fiscal y alta ante la SHCP',
      'Copias fotost&aacute;ticas legibles de identificaciones oficiales vigentes del/los propietarios y/o representantes legales', 
      'Copias fotostáticas de los doce últimos estados de cuenta bancarios del solicitante. (Caratulas)',
      'Mes 1',
      'Mes 2', 
      'Mes 3', 
      'Mes 4', 
      'Mes 5', 
      'Mes 6', 
      'Mes 7', 
      'Mes 8', 
      'Mes 9', 
      'Mes 10',
       'Mes 11',
        'Mes 12',
        'Relación de garantias',     
    'Copias fotost&aacute;ticas legibles del acta de matrimonio. (En su caso)',
    'Copias fotost&aacute;ticas legibles de los doctos. Que acrediten el domicilio particular y de negocio (telefon&iacute;a fija) con una antig&uuml;edad no mayor a 60 d&iacute;as');
    if(strlen($rfc)==13){
        $tipopersona='persona fisica';
        $sql="SELECT pdf_bc,pdf_resumen_ejecutivo, pdf_escrituras, pdf_edo_fin18, pdf_edo_fin19, pdf_edo_fin20, pdf_edo_fin_parcial21, pdf_impuestos19, pdf_impuestos20, pdf_cfdi,pdf_id_oficial,pdf_ene, pdf_feb, pdf_mar,pdf_abr,pdf_may, pdf_jun, pdf_jul, pdf_ago, pdf_sept, pdf_oct, pdf_nov, pdf_dic, pdf_garantias, pdf_matrimonio, pdf_comprobante_dom FROM aantik_webpage.pf_creditform WHERE rfc='$rfc'";
        
    }else{
        $tipopersona='persona moral';
        $sql="SELECT pdf_bc,pdf_resumen_ejecutivo, pdf_escrituras, pdf_edo_fin18, pdf_edo_fin19, pdf_edo_fin20, pdf_edo_fin_parcial21, pdf_impuestos19, pdf_impuestos20, pdf_cfdi,pdf_id_oficial,pdf_ene, pdf_feb, pdf_mar,pdf_abr,pdf_may, pdf_jun, pdf_jul, pdf_ago, pdf_sept, pdf_oct, pdf_nov, pdf_dic, pdf_garantias, pdf_matrimonio, pdf_comprobante_dom FROM aantik_webpage.pm_creditform WHERE rfc='$rfc'"; 
    }
    $result=$db->query($sql);
    $row = $result->fetch_array(MYSQLI_NUM);
   
    echo "<table style='width:100%; border-collapse:separate;'>";

    echo "<tr style='background-color:#002959;border:none;'>";
    echo "<th style='width:45%; font-family:sans-serif; text-align:left;  padding:0.3em;  color:white'>Información para analisis preliminar</th>";
    echo "<th style='width:25%; font-family:sans-serif; text-align:left;  padding:0.3em;  color:white'>Documentos</th>";
    echo "<th style='width:20%; font-family:sans-serif; text-align:left;  padding:0.3em;  color:white'>Empresa</th>";
    echo "<th style='width:70%; font-family:sans-serif; text-align:left;  padding:0.3em;  color:white'>Por accionista</th>";
    echo "</tr>";
  
    echo "<tr style='background-color:#dddddd;'>";
    
    for($i=0; $i<count($row); $i++){
        if($row[$i]==null){
            $status='pendiente';
            
                echo "<tr><td>".$descripciones[$i]."</td><td >"."<td>".$row[$i]."</td>".$tipopersona."</td><td >".$status."</td></tr>";
            
            
        }else{
            if($tipopersona=='persona fisica'){
                
                echo "<tr><td style='width:20%; font-family:sans-serif; text-align:justify; vertical-align:top; border-collapse: collapse; padding:0.7em; background:#fff;'>".$descripciones[$i]."</td><td style='width:25%;font-family:sans-serif;text-align:left; vertical-align:top; border-collapse: collapse; padding:0.7em; background:#fff;'>".$row[$i]."</td><td style='width:25%;font-family:sans-serif; text-align:left; vertical-align:top; border-collapse: collapse; padding:0.7em; background:#fff;'>".$tipopersona."</td><td style='width:25%; text-align:left; vertical-align:top; border-collapse: collapse; padding:0.7em; background:#fff;'><img src='valid.jpg' style='width:20px; align-content:center; margin-left:20px;'\></td></tr>";
            }
            else{
                
            }
            
            
            
        }
        
    }
  
    echo "</table>";

}

?>