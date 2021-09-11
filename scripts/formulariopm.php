<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$user = 'Aantik@aantik';
$password = 'Worksql123'; //To be completed if you have set a password to root
$database = 'aantik_webpage'; //To be completed to connect to a database. The database must exist.
$port = 3306; //Default must be NULL to use default port
$mysqli = new mysqli('aantik.mysql.database.azure.com', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';

// Escape user inputs for security
$nombrepm = $mysqli->real_escape_string($_REQUEST['nombrepm']);
$apaternopm = $mysqli->real_escape_string($_REQUEST['apaternopm']);
$maternopm = $mysqli->real_escape_string($_REQUEST['maternopm']);
$rfcpm = $mysqli->real_escape_string($_REQUEST['rfcpm']);
$celpm = $mysqli->real_escape_string($_REQUEST['celpm']);
$razonpm=$mysqli->real_escape_string($_REQUEST['razonpm']);
$sectornegocio=$mysqli->real_escape_string($_REQUEST['sectornegocio']);
$emailpm = $mysqli->real_escape_string($_REQUEST['emailpm']);
$antiguedad=$mysqli->real_escape_string($_REQUEST['antiguedad']);
$objetivo=$mysqli->real_escape_string($_REQUEST['objetivo']);
$cv_empresapm = $mysqli->real_escape_string($_REQUEST['cv_empresapm']);
$rep_buropm = $mysqli->real_escape_string($_REQUEST['rep_buropm']);
$edos_financierospm = $mysqli->real_escape_string($_REQUEST['edos_financierospm']);
$edo_fin_internospm = $mysqli->real_escape_string($_REQUEST['edo_fin_internospm']);
$escrituras_const=$mysqli->real_escape_string($_REQUEST['escrituras_const']);
$actas_asamblea=$mysqli->real_escape_string($_REQUEST['actas_asamblea']);
$escritura_poderespm=$mysqli->real_escape_string($_REQUEST['escritura_poderespm']);
$dec_impuestospm = $mysqli->real_escape_string($_REQUEST['dec_impuestospm']);
$cfdipm = $mysqli->real_escape_string($_REQUEST['cfdipm']);
$acta_nacimientopm = $mysqli->real_escape_string($_REQUEST['acta_nacimientopm']);
$acta_matrimoniopm = $mysqli->real_escape_string($_REQUEST['acta_matrimoniopm']);
$id_oficialespm= $mysqli->real_escape_string($_REQUEST['id_oficialespm']);
$forma_migratoriapm = $mysqli->real_escape_string($_REQUEST['forma_migratoriapm']);
$recibo_tel= $mysqli->real_escape_string($_REQUEST['recibo_tel']);
$edos_banca = $mysqli->real_escape_string($_REQUEST['edos_banca']);
$referencias_banca = $mysqli->real_escape_string($_REQUEST['referencias_banca']);
$pdf_bcpm = $mysqli->real_escape_string($_REQUEST['pdf_bcpm']);
$pdf_resumen_ejecutivopm = $mysqli->real_escape_string($_REQUEST['pdf_resumen_ejecutivopm']);
$pdf_escrituraspm= $mysqli->real_escape_string($_REQUEST['pdf_escrituraspm']);
$pdf_edo_fin18pm = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin18pm']);
$pdf_edo_fin19pm = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin19pm']);
$pdf_edo_fin20pm = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin20pm']);
$pdf_edo_fin_parcial21pm = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin_parcial21pm']);
$pdf_impuestos19pm = $mysqli->real_escape_string($_REQUEST['pdf_impuestos19pm']);
$pdf_impuestos20pm = $mysqli->real_escape_string($_REQUEST['pdf_impuestos20pm']);
$pdf_cfdipm = $mysqli->real_escape_string($_REQUEST['pdf_cfdipm']);
$pdf_id_oficialpm= $mysqli->real_escape_string($_REQUEST['pdf_id_oficialpm']);
$pdf_enepm = $mysqli->real_escape_string($_REQUEST['pdf_enepm']);
$pdf_febpm  = $mysqli->real_escape_string($_REQUEST['pdf_febpm']);
$pdf_marpm = $mysqli->real_escape_string($_REQUEST['pdf_marpm']);
$pdf_abrpm = $mysqli->real_escape_string($_REQUEST['pdf_abrpm']);
$pdf_maypm = $mysqli->real_escape_string($_REQUEST['pdf_maypm']);
$pdf_junpm = $mysqli->real_escape_string($_REQUEST['pdf_junpm']);
$pdf_julpm = $mysqli->real_escape_string($_REQUEST['pdf_julpm']);
$pdf_agopm = $mysqli->real_escape_string($_REQUEST['pdf_agopm']);
$pdf_septpm = $mysqli->real_escape_string($_REQUEST['pdf_septpm']);
$pdf_octpm = $mysqli->real_escape_string($_REQUEST['pdf_octpm']);
$pdf_novpm = $mysqli->real_escape_string($_REQUEST['pdf_novpm']);
$pdf_dicpm = $mysqli->real_escape_string($_REQUEST['pdf_dicpm']);
$pdf_garantiaspm=$mysqli->real_escape_string($_REQUEST['pdf_garantiaspm']);
$pdf_matrimoniopm= $mysqli->real_escape_string($_REQUEST['pdf_matrimoniopm']);
$pdf_comprobante_dompm = $mysqli->real_escape_string($_REQUEST['pdf_comprobante_dompm']);


// Attempt ins ert query execution
$sql = "INSERT INTO aantik_webpage.pm_creditform (nombre, apellido_1, apellido_2, rfc, phone,razon,sector_negocio, email, antiguedad, objetivo, cv_empresa, rep_buro, edos_financieros, edos_fin_internos, escrituras_const, actas_asamblea, escritura_poderes, dec_impuestos, cfdi, acta_nacimiento, acta_matrimonio, id_oficiales, forma_migratoria, recibo_tel, edos_banca, referencias_banca, pdf_bc, pdf_resumen_ejecutivo, pdf_escrituras, pdf_edo_fin18,pdf_edo_fin19,pdf_edo_fin20, pdf_edo_fin_parcial21, pdf_impuestos19,pdf_impuestos20, pdf_cfdi, pdf_id_oficial, pdf_ene, pdf_feb,pdf_mar,pdf_abr,pdf_may,pdf_jun,pdf_jul,pdf_ago,pdf_sept,pdf_oct,pdf_nov,pdf_dic,pdf_garantias, pdf_matrimonio, pdf_comprobante_dom) VALUES ('$nombrepm','$apaternopm','$maternopm','$rfcpm','$celpm', '$razonpm', '$sectornegocio', '$emailpm', '$antiguedad', '$objetivo', '$cv_empresapm','$rep_buropm','$edos_financierospm','$edo_fin_internospm','$escrituras_const','$actas_asamblea', '$escritura_poderespm','$dec_impuestospm','$cfdipm','$acta_nacimientopm','$acta_matrimoniopm','$id_oficialespm','$forma_migratoriapm','$recibo_tel','$edos_banca', '$referencias_banca','$pdf_bcpm','$pdf_resumen_ejecutivopm','$pdf_escrituraspm','$pdf_edo_fin18pm','$pdf_edo_fin19pm','$pdf_edo_fin20pm','$pdf_edo_fin_parcial21pm','$pdf_impuestos19pm','$pdf_impuestos20pm','$pdf_cfdipm','$pdf_id_oficialpm','$pdf_enepm','$pdf_febpm','$pdf_marpm','$pdf_abrpm','$pdf_maypm','$pdf_junpm','$pdf_julpm','$pdf_agopm','$pdf_septpm','$pdf_octpm','$pdf_novpm','$pdf_dicpm','$pdf_garantiaspm','$pdf_matrimoniopm','$pdf_comprobante_dompm')";
if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>