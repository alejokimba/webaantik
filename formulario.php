<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/formulario2.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
  <header>
    <!--Menu-->
    <nav class="navbar navbar-expand-sm fixed-top " style="background-color:white">
       <div id="redessociales">
           <div class="redessoc">
               <a href="https://www.instagram.com/aantik_finanzasempresariales/"><i class="fab fa-instagram"></i></a>
               
           </div>
           <div class="redessoc">
               <a href="https://www.facebook.com/AantikMx"><i class="fab fa-facebook-f"></i></a>
           </div>
           <div class="redessoc">
               <a href="https://wa.me/message/G7KX3OXRWKWBE1"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="redessoc">
               <a href="https://www.youtube.com/channel/UCujHm4hGuv4ijhcsXiRm_Rg"><i class="fab fa-youtube"></i></a>
             </div>
       </div>   

       <div class="container-fluid menu">
           <button class="navbar-toggler" 
                   type="button" 
                   data-toggle="collapse" 
                   data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" 
                   aria-expanded="false"
                   aria-label="Toogle navigation">
               <span class="navbar-toggler-icon " ></span>
           </button>
          
           <div id="primerlogo"><img src="Imagenes/simboloaantik.png" alt="" height="10%" width="65px"></div> 
           
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                   <li class="nav-item"><a class="nav-link" aria-current="page" href="Inicio.php">Inicio</a></li>
                   <li class="nav-item"><a class="nav-link" href="quienessomos.php">Nosotros</a></li>
                   <li class="nav-item"><a class="nav-link" href="Nuestrosservicios.php">Servicios</a></li>
                   <li class="nav-item"><a class="nav-link" href="Blogfinanciero.php">Blog Financiero</a></li>
                   <li class="nav-item" id="logo"><a class="nav-link" href="#"><img src="Imagenes/simboloaantik.png" alt="" style="width:60%;"></a></li>
                   <li class="nav-item"><a class="nav-link" href="Agendarcita.php">Contacto</a></li>
                   <li class="nav-item"><a class="nav-link" href="dashboard.php">Vista Aantik r??pida al mercado</a></li>
                   <?php
                        if(isset($_SESSION['user'])){
                            echo "<li class='nav-item'><a class='nav-link' href='../formulario.html'>Formulario</a></li>";
                        }else{
                            
                        }
                        
                      ?> 
                  <div class="contenedor-redes-sociales">
                       <div class="redesoc">
                           <i class="fab fa-instagram"></i>
                       </div>
                       <div class="redessoc">
                           <i class="fab fa-facebook-f"></i>
                       </div>
                   </div>  
                   <div id="boton-registrar">
                      <!-- <div class="container" id="cerrar-sesion">
                        <section>
                          <h5>Bienvenido <?php
                          include_once 'scripts/user.php';
                      
                      
                          $user=new User();
                          $user->setUser($_SESSION['user']);
                          echo $user->getNombre();?></h5>
                          <button type="button" class="btn btn-primary"><a href="logout.php">Cerrar sesi??n</a></button>
                        </section>
                      </div> -->
                       
                       <div id="modal-registrar">
                           <div class="creditos">
                               <div class="row botones-opciones-registro">
                                   <div class="col-sm">
                                       <button type="button" class="btn btn-secondary" id="registro">Registrate</button>
                                       <button type="button" class="btn btn-secondary" id="login">Login</button> 
                                   </div>
                               </div>
                           </div>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="page-header">
                                           <h2>Registro</h2>
                                       </div>
                                       <p></p>
                                       <form action="scripts\user_insert.php" method="POST" id="registrate" >
                                           <div class="form-row">
                                               <div class="form-group">
                                                   <label>Nombre</label>
                                                   <input type="text" name="name" class="form-control" required>
                                               </div>
                                               <div class="form-group">
                                                   <label>Apellidos</label>
                                                   <input type="text" name="apellidos" class="form-control" required>
                                               </div>
                                               <div class="form-group">
                                                   <label>Email</label>
                                                   <input type="email" name="email" class="form-control" required>
                                               </div>
                                               <div class="form-group">
                                                   <label>Contrase??a</label>
                                                   <input type="password" name="password" class="form-control" required>
                                               </div>
                                               <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->
                                               <div class="creditos" style="margin-top: 20px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary" name="submit" >Enviar</button>
                                                        
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary" onclick="cerrarModal()" id="btn-cerrar" >Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                           </div>
                                           
                                       </form>
                                       <form action="scripts\login2.php" method="POST" id="logeate" style="display: none;">
                                           <div class="form-row">
                                               <div class="form-group">
                                                   <label>Email</label>
                                                   <input type="email" name="email" class="form-control" required>
                                               </div>
                                               <div class="form-group">
                                                   <label>Contrase??a</label>
                                                   <input type="password" name="password" class="form-control" required>
                                               </div>
                                               <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->
                                               <div class="creditos" style="margin-top: 20px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary" name="submit" >Enviar</button>
                                                        
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary" onclick="cerrarModal()" id="btn-cerrar" >Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                           </div>
                                       </form>
                                   </div>
                               </div>        
                           </div>
                       </div>
                   </div>
               </ul>
           </div>
       </div>
   </nav> 

</header>



    <div class="container">
        <div class="row">
            <div class="col">
                <h1>&iquest; Eres persona f&iacute;sica o moral?</h1>
            </div>
        </div>
        
        <div id="menu">
          <div class="row">
              <div class="col-sm">
                  <ul>
                      <li><a  href="#" id="personafisicamenu">Persona f&iacute;sica</a></li>
                      
                  </ul>
              </div>
              <div class="col-sm">
                  <ul>
                      <li><a href="#" id="personamoralmenu">Persona moral</a></li>
                  </ul>
              </div>
          </div>
        </div>
      </div>

      <div id="formularios">
        <form id="regFormPF" method="POST" name="regFormPF" action="scripts\formulariopf.php">
          <div class="container" id="requisitos">
            <h1>
              Requisitos solicitud cr&eacute;dito
            </h1>
          </div>
          
          <!-- One "tab" for each step in the form: -->
          <!--tab para los datos personales:-->
          <div class="tab">
            <p>
              Informaci&oacute;n personal:
            </p>
            
              <div class="columns"> 
              <div class="field-container">
                <p>Nombre</p>
                <i class="far fa-user-circle"></i>
                <input name="nombrepf" class="field" oninput="this.className = 'field'">
              </div>
              <div class="field-container">
                <p>Apellido Paterno</p>
                <i class="far fa-user-circle"></i>
                <input name="paternopf" class="field" oninput="this.className = 'field'">
              </div>  
            </div> 
            <div class="columns"> 
              <div class="field-container">
                <p>Apellido Materno</p>
                <i class="far fa-user-circle"></i>
                <input name="maternopf" class="field" oninput="this.className = 'field'">
              </div>
              <div class="field-container">
                <p>RFC con Homoclave</p>
                <i class="far fa-edit"></i>
                <input name="rfcpf" class="field" oninput="this.className = 'field'">
              </div>
            </div>
            <div class="columns">
              <div class="field-container">
                <p>Celular(10 d&iacute;gitos)</p>
                <i class="fas fa-phone"></i>
                <input name="celularpf" class="field" oninput="this.className = 'field'">
              </div>
              <div class="field-container">
                <p>E-mail</p>
                <i class="fas fa-envelope-square"></i>
                <input name="emailpf" class="field" oninput="this.className = 'field'">
              </div>
            </div>
          </div> 
          
          <div class="tab"><h2>
            ??Cuentas con la siguiente documentaci&oacute;n?
          </h2>
            <p>Curriculum de la empresa o negocio, as&iacute; como del principal accionista y/o persona f&iacute;sica.</p>
            <div class="g1">
              <div class="radio-container" id="curriculumpf">
                <label class="btn btn-default active" for="curriculum">
                <input class="form-check-input" type="radio" name="curriculumpf" value="1" />Si
                </label> 
                <label class="btn btn-default active" for="curriculum">
                <input class="form-check-input" type="radio" name="curriculumpf" value="0" >No
                </label>
              </div>
      
              <p>Reporte del bur&oacute; de cr&eacute;dito de la empresa, representante legal y principal accionista y/o persona f&iacute;sica.</p>  
              <div class="radio-container" id="reportebcpf">
                <label class="btn btn-default active" for="reportebc">
                <input class="form-check-input" type="radio" name="reportebcpf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="reportebc">
                <input class="form-check-input" type="radio" name="reportebcpf" value="0" />No
                </label>
              </div>
      
            
              <p>Estados financieros de los &uacute;ltimos tres ejercicios que incluyan: balance general, relaciones anal&iacute;ticas de las principales citas,  edo. de resultados y edo. de cambios en la situaci&oacute;n financiera. Con firma aut&oacute;grafa de su representante legal y contador.(Anexar copia fotost&aacute;tica de la c&eacute;dula profesional del contador y en su caso los dict&aacute;menes aplicables a los estados financieros.)</p>
              <div class="radio-container" id="estadosfinancierospf"> 
                <label class="btn btn-default active" for="estadosfinancieros">
                <input class="form-check-input" type="radio" name="estadosfinancierospf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="estadosfinancieros">
                <input class="form-check-input" type="radio" name="estadosfinancierospf" value="0" />No
                </label>
              </div>    
            
              <p>Estados financieros internos con firma aut&oacute;grafa de su representante legal y contador, incluyendo relaciones anal&iacute;ticas de las principales cuentas, con una antig&uuml;edad no mayor a 60 d&iacute;as.</p>
              <div class="radio-container" id="estadosinternospf">
                <label class="btn btn-default active" for="estadosinternos">
                <input class="form-check-input" type="radio" name="estadosinternospf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="estadosinternos">
                <input class="form-check-input" type="radio" name="estadosinternospf" value="0" />No
                </label>
              </div>
            
              <p>Copias fotost&aacute;ticas legibles de las declaraciones de impuestos de los &uacute;ltimos dos ejercicios (con cadena de recepci&oacute;n).</p>
              <div class="radio-container" id="copiasimpuestospf">
                <label class="btn btn-default active" for="copiasimpuestos">
                <input class="form-check-input" type="radio" name="copiasimpuestospf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasimpuestos">
                <input class="form-check-input" type="radio" name="copiasimpuestospf" value="0"/>No
                </label>
              </div>
            </div>
          </div>
          <div class="tab">
            <h2>
              ??Cuentas con la siguiente documentaci&oacute;n?:
            </h2>
            <p>Copias fotost&aacute;ticas legibles de la c&eacute;dula de identificaci&oacute;n fiscal y alta ante la s.h.c.p.</p>
            <div class="g1">
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasfiscal">
                <input class="form-check-input" type="radio" name="cfdipf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasfiscal">
                <input class="form-check-input" type="radio" name="cfdipf" value="0" />No
                </label>
              </div>        
            
              <p>Copias fotost&aacute;ticas legibles del acta de nacimiento, aplica cuando la contrataci&oacute;n sea ante notario p&uacute;blico.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasnacimiento">
                <input class="form-check-input" type="radio" name="copiasnacimientopf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasnacimiento">
                <input class="form-check-input" type="radio" name="copiasnacimientopf" value="0"/>No
                </label>
              </div>
                    
            
              <p>Copias fotost&aacute;ticas legibles del acta de matrimonio, en su caso.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasmatrimonio">
                <input class="form-check-input" type="radio" name="copiasmatrimoniopf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasmatrimonio">
                <input class="form-check-input" type="radio" name="copiasmatrimoniopf" value="0" />No
                </label>
              </div>
                      
            
              <p>Copias fotost&aacute;ticas legibles de identificaciones oficiales vigentes, aplica tambi&eacute;n a los apoderados.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasidentificaciones">
                <input class="form-check-input" type="radio" name="id_oficialespf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasidentificaciones">
                <input class="form-check-input" type="radio" name="id_oficialespf" value="0" />No
                </label>
              </div>
            </div>
          </div>
          
          <div class="tab"><h2>??Cuentas con la siguiente documentaci&oacute;n?</h2>
            <p>Copias fotost&aacute;ticas legibles de la constancia de forma migratoria, en caso de extranjeros seg&uacute;n aplique.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasmigratoria">
                <input class="form-check-input" type="radio" name="copiasmigratoriapf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasmigratoria">
                <input class="form-check-input" type="radio" name="copiasmigratoriapf" value="0" />No
                </label>
              </div>
            <p>Copias fotost&aacute;ticas legibles de doctos que acrediten el domicilio particular y de negocio (telefon&iacute;a fija) con una antig&uuml;edad no mayor a 60 d&iacute;as.</p>
            <div class="g1">
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasdoctos">
                <input class="form-check-input" type="radio" name="comprobante_dompf" value="1" />Si
                </label>
                <label class="btn btn-default active" for="copiasdoctos">
                <input class="form-check-input" type="radio" name="comprobante_dompf" value="0" />No
                </label>
              </div>
              
              <p>Copias fotost&aacute;ticas de los doce &uacute;ltimos estados de cuenta bancarios del solicitante. (Caratulas)</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiabanc">
                <input class="form-check-input" type="radio" name="copiabancpf" value="1"/>Si
                </label>
                <label class="btn btn-default active" for="copiabanc">
                <input class="form-check-input" type="radio" name="copiabancpf" value="0" />No
                </label>
              </div>        
              <p>Referencias comerciales y bancarias en hoja membretada y firmada por el representante legal. (M&iacute;nimo 4 clientes y 4 proveedores con contacto, domicilio, antig&uuml;edad, producto y plazo de cr&eacute;dito).</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiarepre">
                <input class="form-check-input" type="radio" name="ref_comercialespf" value="1"/>Si
                </label>
                <label class="btn btn-default active" for="copiarepre">
                <input class="form-check-input" type="radio" name="ref_comercialespf" value="0" />No
                </label>
              </div>
            </div>
          </div>
      
          <div class="tab"><h2>De las garantias o referencias inmobiliarias</h2>
            <div class="archivosgarantias" >
              Archivos de garantias para cr&eacute;dito
            </div> 
            <p>*Seleccionar solamente archivos en formato .pdf</p>
            <p>Reporte del bur&oacute; de cr&eacute;dito de la empresa, representante legal y principal accionista y/o persona f&iacute;sica</p>
            <p><input type="file" name="pdf_bcpf" oninput="this.className = ''"/></p>
            <p>Resumen ejecutivo</p>
            <p><input type="file" name="pdf_resumen_ejecutivopf" oninput="this.className = ''"/></p>         
            <p>Copias fotost&aacute;ticas legibles de escrituras de inmuebles ofrecidos en garant&iacute;a o referencia con datos de inscripci&oacute;n en el registro p&uacute;blico correspondiente.</p>
            <p><input type="file" name="pdf_escrituraspf" oninput="this.className = ''"/></p>
      
            
              <p>Estados financieros de los ??ltimos tres ejercicios que incluyan: balance general, relaciones anal??ticas de las principales citas., edo. de resultados y edo. de cambios en la situaci??n financiera. Con firma aut??grafa de su representante legal y contador. (Anexar copia fotost??tica de la c??dula profesional del contador y en su caso los dict??menes aplicables a los estados financieros).</p>
              <br>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Estados financieros 2018 <p><input type="file" name="pdf_edo_fin18pf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Estados financieros 2019 <p><input type="file" name="pdf_edo_fin19pf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Estados financieros 2020 <p><input type="file" name="pdf_edo_fin20pf" oninput="this.className = ''"/></p></li>
              </ul>
            
            
              <p>Estados financieros internos con firma aut??grafa de su repres??ntate legal y contador, incluyendo, relaciones anal??ticas de las principales cuentas, con una antig??edad no mayor a 60 d??as.</p>
              <br>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Estados financieros parciales 2021 <p><input type="file" name="pdf_edo_fin_parcial21pf" oninput="this.className = ''"/></p></li>
              </ul>
          </div>
          <div class="tab">
            <h2>De las garantias o referencias inmobiliarias</h2>
            <div class="archivosgarantias" >
              Archivos de garantias para cr&eacute;dito
            </div> 
            <p>*Seleccionar solamente archivos en formato .pdf</p>
            <p>Copias fotost??ticas legibles de las declaraciones de impuestos 2019 (con cadena de recepci??n)</p>
            <p><input type="file" name="pdf_impuestos19pf" oninput="this.className = ''"/></p>
            <p>Copias fotost??ticas legibles de las declaraciones de impuestos 2020 (con cadena de recepci??n)</p>
            <p><input type="file" name="pdf_impuestos20pf" oninput="this.className = ''"/></p>
            <p>Copias fotost??ticas legibles de la c??dula de identificaci??n fiscal y alta ante la SHCP</p>
            <p><input type="file" name="pdf_cfdipf" oninput="this.className = ''"/></p>
            <p>Copias fotost&aacute;ticas legibles de identificaciones oficiales vigentes del/los propietarios y/o representantes legales.</p>
            <p><input type="file" name="pdf_id_oficial" oninput="this.className = ''"/></p>
            <div class="cuenta-bancaria">
              <p>Copias fotost??ticas de los doce ??ltimos estados de cuenta bancarios del solicitante. (Caratulas)</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Mes 1<p><input type="file" name="pdf_enepf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 2<p><input type="file" name="pdf_febpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 3<p><input type="file" name="pdf_marpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 4<p><input type="file" name="pdf_abrpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 5<p><input type="file" name="pdf_maypf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 6<p><input type="file" name="pdf_junpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 7<p><input type="file" name="pdf_julpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 8<p><input type="file" name="pdf_agopf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 9<p><input type="file" name="pdf_septpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 10<p><input type="file" name="pdf_octpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 11<p><input type="file" name="pdf_novpf" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 12<p><input type="file" name="pdf_dicpf" oninput="this.className = ''"/></p></li>
              </ul>
            </div>
            <p>Relaci??n de garantias</p>
            <p><input type="file" name="pdf_garantiaspf" oninput="this.className = ''"/></p>
            <p>Copias fotost&aacute;ticas legibles del acta de matrimonio. (En su caso)</p>
            <p><input type="file" name="pdf_matrimoniopf" oninput="this.className = ''"/></p>
            
            <p>Copias fotost&aacute;ticas legibles de los doctos. Que acrediten el domicilio particular y de negocio (telefon&iacute;a fija) con una antig&uuml;edad no mayor a 60 d&iacute;as</p>
            <p><input type="file" name="pdf_comprobante_dompf" oninput="this.className = ''"/></p>
          </div> 
          
          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtnpf" onclick="nextPrevpf(-1)">Anterior</button>
              <button type="button" id="nextBtnpf" onclick="nextPrevpf(1)">Siguiente</button>
            </div>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span> 
            <span class="step"></span>
          </div>
        </form>
      
      
        <form id="regFormPM" name="regFormPM" action="scripts/formulariopm.php">
          <div class="container" id="requisitos">
            <h1>
              Requisitos solicitud cr&eacute;dito
            </h1>
          </div>
        
          <!-- One "tab" for each step in the form: -->
          <div class="tab">
            <p>Datos del representante legal:</p>
            <div class="columns"> 
              <div class="field-container">
                <p>Nombre</p>
                <i class="far fa-user-circle"></i>
                <input name="nombrepm" class="field" oninput="this.className = 'field'">
              
              </div>
              <div class="field-container">
                <p>Apellido Paterno</p>
                <i class="far fa-user-circle"></i>
                <input name="apaternopm" class="field" oninput="this.className = 'field'">
              </div>  
            </div>
            <div class="columns"> 
              <div class="field-container">
                <p>Apellido Materno</p>
                <i class="far fa-user-circle"></i>
                <input name="maternopm" class="field" oninput="this.className = 'field'">
              </div>
              <div class="field-container">
                <p>Celular</p>
                <i class="fas fa-phone"></i>
                <input name="celpm" id="celularpm" class="field" oninput="this.className = 'field'">
              </div>
            </div>
            <div class="columns">
              
              <div class="field-container">
                <p>E-mail</p>
                <i class="fas fa-envelope-square"></i>
                <input name="emailpm" id="emailpf" class="field" oninput="this.className = 'field'">
              </div>
            </div>
          </div> 
          
          <div class="tab">
            <p>Datos del negocio:</p>
            <div class="columns"> 
              <div class="field-container">
                <p>RFC con Homoclave</p>
                <i class="far fa-edit"></i>
                <input name="rfcpm" id="rfcpm" class="field" oninput="this.className = 'field'">
              </div>
              <div class="field-container">
                <p>Raz&oacute;n social</p>
                <i class="far fa-user-circle"></i>
                <input name="razonpm" class="field" oninput="this.className = 'field'">
              </div>
            </div>
            
            
            <div class="columns"> 
              <div class="field-container">
                <select id="sectornegocio" name="sectornegocio">
                  <option value="">- Sector de tu negocio -</option>
                  <option value="agropecuario">Agropecuario actividades primarias</option>
                  <option value="agroindustriales">Actividades agroindustriales</option>
                  <option value="comercios,restaurantes,hoteles">Comercios, restaurantes, y hoteles</option>
                  <option value="construccion,electricidad">Construcci&oacute;n y electricidad</option>
                  <option value="industria manufacturera">Industria manufacturera</option>
                  <option value="industria extractiva/minera">Industria extractiva/minera</option>
                  <option value="servicios comunales, sociales">Servicios comunales, sociales</option>
                </select>
              </div>  
              <div class="field-container">
                <select id="yearsnegocio" name="antiguedad" >
                  <option selected="selected" value="">- A&ntilde;os de tu negocio -</option>
                  <option value="menos de 2">Menos de 2 a&ntilde;os</option>
                  <option value="de 2 a 4">De 2 a 4 a&ntilde;os</option>
                  <option value="de 4 a 7">De 4 a 7 a&ntilde;os</option>
                  <option value="de 7 a 10">De 7 a 10 a&ntilde;os</option>
                  <option value="mas de 10">M&aacute;s de 10 a&ntilde;os</option>
                </select>
              </div>
            </div>
            <div class="columns">
              <div class="field-container">
                <select id="motivocredito" name="objetivo" >
                  <option value="">- &iquest; Para que es el cr&eacute;dito? -</option>
                  <option value="operacion">Operaci&oacute;n del negocio</option>
                  <option value="expandir o remodelar">Expandir o remodelar tu negocio</option>
                  <option value="gastos imprevistos">Gastos imprevistos</option>
                </select>
              </div>
            </div>
          </div>  
          
      
          <div class="tab"><h2>Documentaci&oacute;n:</h2>
            <p>Curriculum de la empresa o negocio, as&iacute; como del principal accionista y/o persona f&iacute;sica.</p>
            <div class="g1">
              <div class="radio-container">
                <label class="btn btn-default active" for="cv_empresapm">
                <input class="form-check-input" type="radio" name="cv_empresapm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="cv_empresapm">
                <input class="form-check-input" type="radio" name="cv_empresapm" value="0" />No
                </label>
              </div>         
            
              <p>Reporte del bur&oacute; de cr&eacute;dito de la empresa, representante legal y principal accionista y/o persona f&iacute;sica.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="rep_buropm">
                <input class="form-check-input" type="radio" name="rep_buropm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="rep_buropm">
                <input class="form-check-input" type="radio" name="rep_buropm" value="0" />No
                </label>
              </div>
                      
              <p>Estados financieros de los &uacute;ltimos tres ejercicios que incluyan: balance general, relaciones anal&iacute;ticas de las principales citas,  edo. de resultados y edo. de cambios en la situaci&oacute;n financiera. Con firma aut&oacute;grafa de su representante legal y contador.(Anexar copia fotost&aacute;tica de la c&eacute;dula profesional del contador y en su caso los dict&aacute;menes aplicables a los estados financieros.)</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="edos_financierospm">
                <input class="form-check-input" type="radio" name="edos_financierospm" value="1" />Si
                </label> 
                <label class="btn btn-default active" for="edos_financierospm">
                <input class="form-check-input" type="radio" name="edos_financierospm" value="0" />No
                </label>
              </div>
                      
            
              <p>Estados financieros internos con firma aut&oacute;grafa de su repres&eacute;ntante legal y contador, incluyendo relaciones anal&iacute;ticas de las principales cuentas, con una antig&uuml;edad no mayor a 60 d&iacute;as.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="edo_fin_internospm">
                <input class="form-check-input" type="radio" name="edo_fin_internospm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="edo_fin_internospm">
                <input class="form-check-input" type="radio" name="edo_fin_internospm" value="0" />No
                </label>
              </div>
            </div> 
          </div>        
      
          <div class="tab"><h2>Documentaci&oacute;n:</h2>
            <div class="g1">
              <p>Copias fotost&aacute;ticas legibles de escrituras constitutivas y &uacute;ltimas reformas a los estatutos sociales con datos de inscripci&oacute;n en el registro p&uacute;blico correspondiente.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="escrituras_const">
                <input class="form-check-input" type="radio" name="escrituras_const" value="1" />Si
                </label>
                <label class="btn btn-default active" for="escrituras_const">
                <input class="form-check-input" type="radio" name="escrituras_const" value="0" />No
                </label>
              </div>
      
      
              <p>Copias fotost&aacute;ticas de las modificaciones y actas de asamblea.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="actas_asamblea">
                <input class="form-check-input" type="radio" name="actas_asamblea" value="1" />Si
                </label>
                <label class="btn btn-default active" for="actas_asamblea">
                <input class="form-check-input" type="radio" name="actas_asamblea" value="0" />No
                </label>
              </div>
              <p>Copias fotost&aacute;ticas legibles de escrituras de otorgamiento de poderes vigentes con datos de inscripci&oacute;n en el registro p&uacute;blico correspondiente.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="escritura_poderespm">
                <input class="form-check-input" type="radio" name="escritura_poderespm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="escritura_poderespm">
                <input class="form-check-input" type="radio" name="escritura_poderespm" value="0" />No
                </label>
              </div>
              <p>Copias fotost&aacute;ticas legibles de las declaraciones de impuestos de los &uacute;ltimos dos ejercicios (con cadena de recepci&oacute;n).</p>
                <div class="radio-container">
                  <label class="btn btn-default active" for="dec_impuestospm">
                  <input class="form-check-input" type="radio" name="dec_impuestospm" value="1" />Si
                  </label>
                  <label class="btn btn-default active" for="dec_impuestospm">
                  <input class="form-check-input" type="radio" name="dec_impuestospm" value="0" />No
                  </label>
                </div>
            </div>
          </div>    
      
          <div class="tab"><h2>Documentaci&oacute;n:</h2>
            <div class="g1">
              <p>Copias fotost&aacute;ticas legibles de la c&eacute;dula de identificaci&oacute;n fiscal y alta ante la s.h.c.p.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="copiasfiscal">
                <input class="form-check-input" type="radio" name="cfdipm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="cfdipm">
                <input class="form-check-input" type="radio" name="cfdipm" value="0" />No
                </label>
              </div>        
              
              <p>Copias fotost&aacute;ticas legibles del acta de nacimiento, aplica cuando la contrataci&oacute;n sea ante notario p&uacute;blico.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="acta_nacimientopm">
                <input class="form-check-input" type="radio" name="acta_nacimientopm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="acta_nacimientopm">
                <input class="form-check-input" type="radio" name="acta_nacimientopm" value="0" />No
                </label>
              </div>
                      
              <p>Copias fotost&aacute;ticas legibles del acta de matrimonio, en su caso.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="acta_matrimoniopm">
                <input class="form-check-input" type="radio" name="acta_matrimoniopm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="acta_matrimoniopm">
                <input class="form-check-input" type="radio" name="acta_matrimoniopm" value="0" />No
                </label>
              </div>
                      
            
              <p>Copias fotost&aacute;ticas legibles de identificaciones oficiales vigentes, aplica tambi&eacute;n a los apoderados.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="id_oficialespm">
                <input class="form-check-input" type="radio" name="id_oficialespm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="id_oficialespm">
                <input class="form-check-input" type="radio" name="id_oficialespm" value="0" />No
                </label>
              </div>       
            </div>
          </div>
          
          <div class="tab"><h2>Documentaci&oacute;n:</h2>
            <div class="g1">
              <p>Copias fotost&aacute;ticas legibles de la constancia de forma migratoria, en caso de extranjeros seg&uacute;n aplique.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="forma_migratoriapm">
                <input class="form-check-input" type="radio" name="forma_migratoriapm" value="1" />Si
                </label>
                <label class="btn btn-default active" for="forma_migratoriapm">
                <input class="form-check-input" type="radio" name="forma_migratoriapm" value="0" />No
                </label>
              </div>
              <p>Copias fotost&aacute;ticas legibles de doctos que acrediten el domicilio particular y de negocio (telefon&iacute;a fija) con una antig??edad no mayor a 60 d??as.</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="recibo_tel">
                <input class="form-check-input" type="radio" name="recibo_tel" value="1" />Si
                </label>
                <label class="btn btn-default active" for="recibo_tel">
                <input class="form-check-input" type="radio" name="recibo_tel" value="0" />No
                </label>
              </div>
        
              <p>Copias fotost&aacute;ticas de los doce &uacute;ltimos estados de cuenta bancarios del solicitante. (Caratulas)</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="edos_banca">
                <input class="form-check-input" type="radio" name="edos_banca" value="1" />Si
                </label>
                <label class="btn btn-default active" for="edos_banca">
                <input class="form-check-input" type="radio" name="edos_banca" value="0" />No
                </label> 
              </div>  
            
              <p>Referencias comerciales y bancarias en hoja membretada y firmada por el representante legal. (M&iacute;nimo 4 clientes y 4 proveedores con contacto, domicilio, antig&uuml;edad, producto y plazo de cr&eacute;dito).</p>
              <div class="radio-container">
                <label class="btn btn-default active" for="referencias_banca">
                <input class="form-check-input" type="radio" name="referencias_banca" value="1" />Si
                </label>
                <label class="btn btn-default active" for="referencias_banca">
                <input class="form-check-input" type="radio" name="referencias_banca" value="0" />No
                </label>
              </div> 
            </div>      
          </div>
          <div class="tab"><h2>De las garantias o referencias inmobiliarias</h2>
            <div class="archivosgarantias" >
              Archivos de garantias para cr&eacute;dito
            </div> 
            <p>*Seleccionar solamente archivos en formato .pdf</p>
            <p>Reporte del bur&oacute; de cr&eacute;dito de la empresa, representante legal y principal accionista y/o persona f&iacute;sica</p>
            <p><input type="file" name="pdf_bcpm" oninput="this.className = ''"/></p>
            <p>Resumen ejecutivo</p>
            <p><input type="file" name="pdf_resumen_ejecutivopm" oninput="this.className = ''"/></p>         
            <p>Copias fotost&aacute;ticas legibles de escrituras de inmuebles ofrecidos en garant&iacute;a o referencia con datos de inscripci&oacute;n en el registro p&uacute;blico correspondiente.</p>
            <p><input type="file" name="pdf_escrituraspm" oninput="this.className = ''"/></p>
      
            
              <p>Estados financieros de los ??ltimos tres ejercicios que incluyan: balance general, relaciones anal??ticas de las principales citas., edo. de resultados y edo. de cambios en la situaci??n financiera. Con firma aut??grafa de su representante legal y contador. (Anexar copia fotost??tica de la c??dula profesional del contador y en su caso los dict??menes aplicables a los estados financieros).</p>
              <br>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Estados financieros 2018 <p><input type="file" name="pdf_edo_fin18pm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Estados financieros 2019 <p><input type="file" name="pdf_edo_fin19pm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Estados financieros 2020 <p><input type="file" name="pdf_edo_fin20pm" oninput="this.className = ''"/></p></li>
              </ul>
            
            
              <p>Estados financieros internos con firma aut??grafa de su repres??ntate legal y contador, incluyendo, relaciones anal??ticas de las principales cuentas, con una antig??edad no mayor a 60 d??as.</p>
              <br>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Estados financieros parciales 2021 <p><input type="file" name="pdf_edo_fin_parcial21pm" oninput="this.className = ''"/></p></li>
              </ul>
          </div>
          <div class="tab">
            <h2>De las garantias o referencias inmobiliarias</h2>
            <div class="archivosgarantias" >
              Archivos de garantias para cr&eacute;dito
            </div> 
            <p>*Seleccionar solamente archivos en formato .pdf</p>
            <p>Copias fotost??ticas legibles de las declaraciones de impuestos 2019 (con cadena de recepci??n)</p>
            <p><input type="file" name="pdf_impuestos19pm" oninput="this.className = ''"/></p>
            <p>Copias fotost??ticas legibles de las declaraciones de impuestos 2020 (con cadena de recepci??n)</p>
            <p><input type="file" name="pdf_impuestos20pm" oninput="this.className = ''"/></p>
            <p>Copias fotost??ticas legibles de la c??dula de identificaci??n fiscal y alta ante la SHCP</p>
            <p><input type="file" name="pdf_cfdipm" oninput="this.className = ''"/></p>
            <p>Copias fotost&aacute;ticas legibles de identificaciones oficiales vigentes del/los propietarios y/o representantes legales.</p>
            <p><input type="file" name="pdf_id_oficialpm" oninput="this.className = ''"/></p>
            <div class="cuenta-bancaria">
              <p>Copias fotost??ticas de los doce ??ltimos estados de cuenta bancarios del solicitante. (Caratulas)</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Mes 1<p><input type="file" name="pdf_enepm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 2<p><input type="file" name="pdf_febpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 3<p><input type="file" name="pdf_marpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 4<p><input type="file" name="pdf_abrpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 5<p><input type="file" name="pdf_maypm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 6<p><input type="file" name="pdf_junpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 7<p><input type="file" name="pdf_julpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 8<p><input type="file" name="pdf_agopm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 9<p><input type="file" name="pdf_septpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 10<p><input type="file" name="pdf_octpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 11<p><input type="file" name="pdf_novpm" oninput="this.className = ''"/></p></li>
                <li class="list-group-item">Mes 12<p><input type="file" name="pdf_dicpm" oninput="this.className = ''"/></p></li>
              </ul>
            </div>
            <p>Relaci??n de garantias</p>
            <p><input type="file" name="pdf_garantiaspm" oninput="this.className = ''"/></p>
            <p>Copias fotost&aacute;ticas legibles del acta de matrimonio. (En su caso)</p>
            <p><input type="file" name="pdf_matrimoniopm" oninput="this.className = ''"/></p>
            
            <p>Copias fotost&aacute;ticas legibles de los doctos. Que acrediten el domicilio particular y de negocio (telefon&iacute;a fija) con una antig&uuml;edad no mayor a 60 d&iacute;as</p>
            <p><input type="file" name="pdf_comprobante_dompm" oninput="this.className = ''"/></p>
          </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtnpm" onclick="nextPrevpm(-1)">Anterior</button>
              <button type="button" id="nextBtnpm" onclick="nextPrevpm(1)">Siguiente</button>
            </div>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>
        </form>
        
    </div>
    <div class="container status">
      <div class="statusboton">
        <a href="status.html"><button type="button" class="btn btn-info" id="checkstatus">Verificar estatus</button></a>
      </div>
    </div>
    

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	  <script src="js/Inicio.js"></script>
    <script src="js/form.js"></script>
</body>
</html>