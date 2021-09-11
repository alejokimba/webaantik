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
$nombrepf = $mysqli->real_escape_string($_REQUEST['nombrepf']);
$apaternopf = $mysqli->real_escape_string($_REQUEST['paternopf']);
$maternopf = $mysqli->real_escape_string($_REQUEST['maternopf']);
$rfcpf = $mysqli->real_escape_string($_REQUEST['rfcpf']);
$celpf = $_REQUEST['celularpf'];
$emailpf = $mysqli->real_escape_string($_REQUEST['emailpf']);
$cv_empresapf = $mysqli->real_escape_string($_REQUEST['curriculumpf']);
$rep_buropf = $mysqli->real_escape_string($_REQUEST['reportebcpf']);
$edo_financierospf = $mysqli->real_escape_string($_REQUEST['estadosfinancierospf']);
$edo_fin_internospf = $mysqli->real_escape_string($_REQUEST['estadosinternospf']);
$dec_impuestospf = $mysqli->real_escape_string($_REQUEST['copiasimpuestospf']);
$cfdipf = $mysqli->real_escape_string($_REQUEST['cfdipf']);
$acta_nacimientopf = $mysqli->real_escape_string($_REQUEST['copiasnacimientopf']);
$acta_matrimoniopf = $mysqli->real_escape_string($_REQUEST['copiasmatrimoniopf']);
$id_oficialespf = $mysqli->real_escape_string($_REQUEST['id_oficialespf']);
$forma_migratoriapf = $mysqli->real_escape_string($_REQUEST['copiasmigratoriapf']);
$comprobante_dompf= $mysqli->real_escape_string($_REQUEST['comprobante_dompf']);
$edo_fin_bancariopf = $mysqli->real_escape_string($_REQUEST['copiabancpf']);
$ref_comercialespf = $mysqli->real_escape_string($_REQUEST['ref_comercialespf']);
$pdf_bcpf = $mysqli->real_escape_string($_REQUEST['pdf_bcpf']);
$pdf_resumen_ejecutivopf = $mysqli->real_escape_string($_REQUEST['pdf_resumen_ejecutivopf']);
$pdf_escrituraspf = $mysqli->real_escape_string($_REQUEST['pdf_escrituraspf']);
$pdf_edo_fin18pf = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin18pf']);
$pdf_edo_fin19pf = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin19pf']);
$pdf_edo_fin20pf = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin20pf']);
$pdf_edo_fin_parcial21pf = $mysqli->real_escape_string($_REQUEST['pdf_edo_fin_parcial21pf']);
$pdf_impuestos19pf = $mysqli->real_escape_string($_REQUEST['pdf_impuestos19pf']);
$pdf_impuestos20pf = $mysqli->real_escape_string($_REQUEST['pdf_impuestos20pf']);
$pdf_cfdipf = $mysqli->real_escape_string($_REQUEST['pdf_cfdipf']);
$pdf_id_oficial = $mysqli->real_escape_string($_REQUEST['pdf_id_oficial']);
$pdf_enepf = $mysqli->real_escape_string($_REQUEST['pdf_enepf']);
$pdf_febpf  = $mysqli->real_escape_string($_REQUEST['pdf_febpf']);
$pdf_marpf = $mysqli->real_escape_string($_REQUEST['pdf_marpf']);
$pdf_abrpf = $mysqli->real_escape_string($_REQUEST['pdf_abrpf']);
$pdf_maypf = $mysqli->real_escape_string($_REQUEST['pdf_maypf']);
$pdf_junpf = $mysqli->real_escape_string($_REQUEST['pdf_junpf']);
$pdf_julpf = $mysqli->real_escape_string($_REQUEST['pdf_julpf']);
$pdf_agopf = $mysqli->real_escape_string($_REQUEST['pdf_agopf']);
$pdf_septpf = $mysqli->real_escape_string($_REQUEST['pdf_septpf']);
$pdf_octpf = $mysqli->real_escape_string($_REQUEST['pdf_octpf']);
$pdf_novpf = $mysqli->real_escape_string($_REQUEST['pdf_novpf']);
$pdf_dicpf = $mysqli->real_escape_string($_REQUEST['pdf_dicpf']);
$pdf_garantiaspf=$mysqli->real_escape_string($_REQUEST['pdf_garantiaspf']);
$pdf_matrimoniopf = $mysqli->real_escape_string($_REQUEST['pdf_matrimoniopf']);
$pdf_comprobante_dompf = $mysqli->real_escape_string($_REQUEST['pdf_comprobante_dompf']);


// Attempt ins ert query execution
$sql = "INSERT INTO aantik_webpage.pf_creditform (nombre, apellido_1, apellido_2, rfc, phone, email,cv_empresa, rep_buro, edos_financieros, edos_fin_internos, dec_impuestos, cfdi, acta_nacimiento, acta_matrimonio, id_oficiales, forma_migratoria, comprobante_dom, edos_fin_bancario, ref_comerciales, pdf_bc, pdf_resumen_ejecutivo, pdf_escrituras, pdf_edo_fin18,pdf_edo_fin19,pdf_edo_fin20, pdf_edo_fin_parcial21, pdf_impuestos19,pdf_impuestos20, pdf_cfdi, pdf_id_oficial, pdf_ene, pdf_feb,pdf_mar,pdf_abr,pdf_may,pdf_jun,pdf_jul,pdf_ago,pdf_sept,pdf_oct,pdf_nov,pdf_dic,pdf_garantias, pdf_matrimonio, pdf_comprobante_dom) VALUES ('$nombrepf','$apaternopf','$maternopf','$rfcpf','$celpf','$emailpf','$cv_empresapf','$rep_buropf','$edo_financierospf','$edo_fin_internospf','$dec_impuestospf','$cfdipf','$acta_nacimientopf','$acta_matrimoniopf','$id_oficialespf','$forma_migratoriapf','$comprobante_dompf','$edo_fin_bancariopf','$ref_comercialespf','$pdf_bcpf','$pdf_resumen_ejecutivopf','$pdf_escrituraspf','$pdf_edo_fin18pf','$pdf_edo_fin19pf','$pdf_edo_fin20pf','$pdf_edo_fin_parcial21pf','$pdf_impuestos19pf','$pdf_impuestos20pf','$pdf_cfdipf','$pdf_id_oficial','$pdf_enepf','$pdf_febpf','$pdf_marpf','$pdf_abrpf','$pdf_maypf','$pdf_junpf','$pdf_julpf','$pdf_agopf','$pdf_septpf','$pdf_octpf','$pdf_novpf','$pdf_dicpf','$pdf_garantiaspf','$pdf_matrimoniopf','$pdf_comprobante_dompf')";
if($mysqli->query($sql) === true){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>