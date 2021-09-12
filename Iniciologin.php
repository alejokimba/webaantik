
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="HandheldFriendly" content="true">
<title>Descubra cómo hacer crecer su negocio en 2021</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="../css/iniciologin.css">
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
               
                <div id="primerlogo"><img src="../Imagenes/simboloaantik.png" alt="" height="10%" width="65px"></div> 
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="../Iniciologin.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../quienessomos.php">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Nuestrosservicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Blogfinanciero.php">Blog Financiero</a></li>
                        <li class=" nav-item" id="logo"><a class="nav-link" href="#"><img src="../Imagenes/simboloaantik.png" alt="" style="width:60%;"></a></li>
                        <li class="nav-item"><a class="nav-link" href="../Agendarcita.php">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard.php">Vista Aantik rápida al mercado</a></li>
                        <?php
                        if(isset($_SESSION['user'])){
                            echo "<li class='nav-item'><a class='nav-link' href='../formulario.php'>Formulario</a></li>";
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
                        <div class="container" id="cerrar-sesion">
                            <section>
                                <h5>Bienvenido <?php
                                include_once 'scripts/user.php';
                            
                           
                                $user=new User();
                                $user->setUser($_SESSION['user']);
                                echo $user->getNombre();?></h5>
                                <button type="button" class="btn btn-primary"><a href="logout.php">Cerrar sesión</a></button>
                            </section>
                           
                        </div>
                    </ul>
                </div>
            </div>
        </nav> 
    
    </header>
    
    <div class="contenedor"> 
        <div class="finanzasempresariales">
            <img src="../Imagenes/finanzasempresariales.png" id="finanzasimagen1" alt="" style="width: 100%;">
            <div id="agendarsesion">
                <a href = "../Agendarcita.php"><button> Agendar Sesión</button></a>
            </div>
        </div>
        
       
        <div class="quienes-somos">
            <div class="titulo">
                ¿QUIÉNES SOMOS?
            </div>
            <div class="quienes-somos-texto">
                <p>
                    Aantik es la plataforma creada para acercar al pequeño empresario a especialistas financieros.
                </p> 
                <p>
                    Y con su ayuda tener una visión clara y eficiente de su negocio, optimizando tiempo y esfuerzos.
                </p>
            </div>
        </div>
        <div class="nuestros-servicios">
            <div class="titulo">
                NUESTROS SERVICIOS
            </div>
            <div class="container">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                
                                <div class="col-sm">
                                    
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Proyecciones financieras</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/ProyeccionFinanciera.png" alt="" style="width: 200px;">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../Proyeccionesfinancieras.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>CFO as a service</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/CFO-400x400.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../CFOasaservice.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Valuación de la empresa</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/valuacionempresa.png" alt="" style="width: 200px;">
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../valuaciondelaempresa.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                      <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Tablero de indicadores</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/tablero de indicadores.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../Tablerodeindicadoresdedesempeño.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Estudio de mercado</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/estudiodemercado.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../Estudiodemercado.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Acercamiento de crédito o capital</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/creditoimagen.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../formulario.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                            </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Manual para la implementación de Gobierno Corporativo</h4>
                                                <div class="icono">
                                                    <img src="../Imagenes/manualparalaimplementacion.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="Manual para la implementación de Gobierno Corporativo.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Manual Estructura Organizacional</h4>
                                                <div class="icono" style="margin-top: 30px;">
                                                    <img src="../Imagenes/manualdeesctructura.png" alt="" style="width: 200px;">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="Manual Estructura Organizacional.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                                <div class="col-sm">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h4>Asesoría Financiera</h4>
                                                <div class="icono" style="margin-top: 30px;">
                                                    <img src="../Imagenes/AsesoriaFinanciera.png" alt="" style="width: 200px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-solicitar" >
                                        <a href="../asesoriafinanciera.html"><button type="button">Solicitar</button></a>
                                    </div> 
                                </div>
                            </div>
                       </div>
                   </div>
                    
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
          
        </div>
        <div class="nuestros-clientes">
            <div class="titulo">
                NUESTROS CLIENTES
            </div>
            <div class="container">
                <div class="row" id="clientes">
                    <div class="col-sm img">
                        <div class="logoclientes">
                            <a href="https://www.casaagustina.com" >
                                <span>
                                    <img class="img-fluid" src="../Imagenes/logo-casa-agustina-brand-color.png" alt="">
                                </span>
                            </a>
                        </div>
                        
                    </div>
                    <div class="col-sm img">
                        <a href="https://www.centroeducativometepec.com/"><img class="img-fluid" src="../Imagenes/LOGO-CEM.png" alt="" style="height: 130px;"></a>
                    </div>
                    <div class="col-sm img">
                        <a href=""><img class="img-fluid" src="../Imagenes/insync.jpeg" alt="" ></a>
                    </div>
                    <div class="col-sm img"> 
                        <a href="https://gistyk.com/"><img class="img-fluid" src="../Imagenes/Gistyk-nueva-imagen-9.png" alt="" style="width: 100%;"></a>
                    </div>
                    <div class="col-sm img">
                        <a href="https://www.facebook.com/clibiex.merida"><img class="img-fluid" src="../Imagenes/clibiex.jpeg" alt="" style="width: 100%;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="pie">
            <h2>Atención personalizada</h2>
            <img src="../Imagenes/zoom1.png" alt="" >
        </div>
        
    </footer>

    <script src="../js/Inicio.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script src="../js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
</body>
</html>

