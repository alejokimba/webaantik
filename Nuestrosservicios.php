<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros servicios</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="css/nuestroservicios2.css">
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
                    <span class="navbar-toggler-icon btn btn-light" style="color: black;"></span>
                </button>
               
                <div id="primerlogo"><img src="Imagenes/simboloaantik.png" alt="" height="10%" width="65px"></div> 
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="Inicio.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="quienessomos.php">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="Nuestrosservicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="Blogfinanciero.php">Blog Financiero</a></li>
                        <li class="nav-item" id="logo"><a class="nav-link" href="#"><img src="Imagenes/simboloaantik.png" alt="" style="width:60%;"></a></li>
                        <li class="nav-item"><a class="nav-link" href="Agendarcita.php">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="dashboard.html">Vista Aantik rápida al mercado</a></li>
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
                            <?php if((isset($_SESSION['user']))==false){
                                echo "<span id='registrarse'><button  id='regsesion' onclick='MostrarModalRegistro()'>Registrate</button></span>";
                           }else if(isset($_SESSION['user'])){
                               
                            include_once 'scripts/user.php';
                            
                           
                           $user=new User();
                           
                           
                           $user->setUser($_SESSION['user']);
                            echo "<div class='container' id='cerrar-sesion' style='text-align:center'><h5>Bienvenido ".$user->getNombre()."</h5><button type='button' class='btn btn-primary'><a href='scripts/logout.php' style='text-decoration:none; color:white;'>Cerrar sesión</a></button></div>";
                           }
                           ?>
                           
                            
                            
                            <div id="modal-registrar">
                                <div class="container">
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
                                                        <label>Contraseña</label>
                                                        <input type="password" name="password" class="form-control" required>
                                                    </div>
                                                    <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->
                                                    <div class="container" style="margin-top: 20px;">
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
                                            <form action="scripts\index.php" method="POST" id="logeate" style="display: none;">
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contraseña</label>
                                                        <input type="password" name="password" class="form-control" required>
                                                    </div>
                                                    <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->
                                                    <div class="container" style="margin-top: 20px;">
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
   
   <div class="container-fluid seccion">
       <div class="titulo">
           <div class="titulo-texto">Nuestros servicios</div>
       </div>
       <div class="row salto">
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/1.png" alt="" >
                            <div class="texto-servicios">
                                Proyecciones financieras
                            </div>
                       </div>
                       <div class="flip-card-back">
                           <div class="contenedor">
                                <div class="servicios-texto">
                                    Permite ver en números el futuro esperado de una empresa.
                                </div>  
                                <a href="Proyeccionesfinancieras.html"><button class="btn btn-primary btn-servicios">Ver más</button></a> 
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/2.png" alt="">
                            <div class="texto-servicios">
                                Valuación de la empresa
                            </div>
                       </div>
                       <div class="flip-card-back">
                           <div class="contenedor">
                               <div class="servicios-texto">
                                Conocer el valor de tu negocio en términos monetarios.
                               </div>
                               <a href="valuaciondelaempresa.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>                                 
                           </div>
                       
                       </div>
                   </div>
               </div>
                
           </div>
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/3.png" alt="">
                            <div class="texto-servicios">
                            Estudio de mercado
                            </div> 
                       </div>
                       <div class="flip-card-back">
							<div class="servicios-texto">
                                Conocer la oportunidad que existe de crecimiento en el mercado al que se va dirigido como empresa.
                            </div>
                            <a href="Estudiodemercado.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/4.png" alt="">
                            <div class="texto-servicios">
                                Manual para implementación de Gobierno Corporativo
                            </div>
                       </div>
                       <div class="flip-card-back">
							<div class="servicios-texto">
                                Garantizar la transparencia. Buscar el respeto del régimen legal de la compañía.
                            </div>
                            <a href="Manual para la implementación de Gobierno Corporativo.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
                   </div>
               </div>
                
           </div>
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/5.png" alt=""> 
                            <div class="texto-servicios">
                                Manual Estructura organizacional
                            </div>
                       </div>
                       <div class="flip-card-back">
							<div class="servicios-texto">
                                Establecer roles y funciones de los miembros de una organización.
                            </div>
                            <a href="Manual Estructura Organizacional.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
                   </div>
               </div>
                
           </div>
           <div class="col-sm">
               <div class="flip-card">
                   <div class="flip-card-inner">
                       <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/6.png" alt=""> 
                            <div class="texto-servicios">
                                Tablero de indicadores claves de desempeño
                            </div>
                       </div>
                       <div class="flip-card-back">
							<div class="servicios-texto">
                                Medir el desempeño financiero, comercial, operativo, de personal, entre otros. Fijar metas mensuales y Dar seguimiento.
                            </div>
                            <a href="Tablerodeindicadoresdedesempeño.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
                   </div>
               </div>  
           </div>
       </div>
       <div class="row negocio" >
           <div class="col-sm"></div>
            <div class="col-sm">
                <div class="flip-card" id="plannegocio">
                    <div class="flip-card-inner" id="plan-negocio">
                        <div class="flip-card-front">
                            <img class="img-fluid mx-auto d-block" src="Imagenes/plan de negocio.png" alt=""> 
                            <div class="texto-servicios">
                                Plan de negocio
                            </div>
                        </div>
                        <div class="flip-card-back">
							<div class="servicios-texto">
                                Medir el desempeño financiero, comercial, operativo, de personal, entre otros. Fijar metas mensuales y Dar seguimiento.
                            </div>
                            <a href="plandenegocio.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
                    </div>
                </div> 
           </div>
           <div class="col-sm"></div>
       </div>
   </div>
   <div class="container-fluid seccion">
    <div class="titulo">
        <div class="titulo-texto">
            Servicios Clave
        </div>
    </div>
    <div class="row salto">
        <div class="col-sm">
            <div class="flip-card">
                <div class="container flip-card-inner">
                    <div class="flip-card-front">
                        <img class="img-fluid mx-auto d-block" src="Imagenes/13.png" alt="" >
                        <div class="texto-servicios">
                            CFO as a service
                        </div>
                    </div>
                    <div class=" flip-card-back">
							<div class="servicios-texto">
                                Un Director Financiero de alto nivel, mes con mes te dirá a detalle dónde se encuentra tu negocio y hacia dónde se dirige.
                            </div>
                            <a href="CFOasaservice.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                    </div>
                </div>
            </div>
            
       </div>
       <div class="col-sm">
           <div class="flip-card">
               <div class="flip-card-inner">
                   <div class="flip-card-front">
                        <img class="img-fluid mx-auto d-block" src="Imagenes/12.png" alt="">
                        <div class="texto-servicios">
                            Acercamiento de crédito o capital
                        </div>
                   </div>
                   <div class="flip-card-back">
							<div class="servicios-texto">
                               Asesoria y acompañamiento para seleccionar y obtener el mejor crédito para tu negocio.
                            </div>
                            <a href="formulario.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
               </div>
           </div>
        
       </div>
       <div class="col-sm">
           <div class="flip-card">
               <div class="flip-card-inner">
                   <div class="flip-card-front">
                        <img class="img-fluid mx-auto d-block" src="Imagenes/11.png" alt="">
                        <div class="texto-servicios">
                        Asesoria Financiera 
                        </div> 
                   </div>
                   <div class="flip-card-back">
							<div class="servicios-texto">
                                Servicio que presta un asesor financiero que puede ayudarte en las decisiones que debas tomar en materia de finanzas
                            </div>
                            <a href="asesoriafinanciera.html"><button class="btn btn-primary btn-servicios">Ver más</button></a>
                       </div>
               </div>
           </div>
       </div>
    </div>
   </div>
   <footer>
    <div class="container-fluid pie">
        <div class="row justify-content-md-center">
            <div class="col-sm">
                <h2>Atención personalizada</h2>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm">
               
                 <a href="#">
                    <img class="img-responsive mx-auto d-block" src="Imagenes\zoom1.png" alt="" style="width:auto; margin:0 auto; height: 10vh;">
                </a> 
            </div>
        </div>
    </div>
</footer>
<script src="js/Inicio.js"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
</body>
</html>