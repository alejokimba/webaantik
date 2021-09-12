
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar Cita</title>
        <link rel="stylesheet" href="css/main.css">
        <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/agendarcita2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    </head>
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
                        <li class=" nav-item d-flex justify-content-center " ><a href="./Inicio.php" id="logo"><img src="Imagenes/simboloaantik.png" alt="" style="width:50%;"></a></li>
                        <li class="nav-item"><a class="nav-link" href="Blogfinanciero.php">Blog Financiero</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="Agendarcita.php">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link " href="dashboard.php">Vista Aantik rápida al mercado</a></li>
                       <?php
                        if(isset($_SESSION['user'])){
                            echo "<li class='nav-item'><a class='nav-link' href='formulario.html'>Formulario</a></li>";
                        }else{
                            
                        }
                        ?>
                        <!-- <li class="nav-item"><a class="nav-link" href="formulario.html">Formulario</a></li>  -->
                       <div class="contenedor-redes-sociales">
                            <div class="redesoc">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="redessoc">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>  
                        
                    </ul>
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
                                    <form action="scripts/index.php" method="POST" id="logeate" style="display: none;">
                                    
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
           </div>
       </nav> 
   
   </header>
    <div class="contenedor" style="margin-top: 115px;">
        <img class="img-fluid" src="Imagenes/agendarsesionfondo.png" alt="" style="width: 100%; height:auto;">
    </div>
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm">
                <div class="d-flex justify-content-center titulo">
                    Agendar una cita
                </div>
            </div>
        </div>
        
        
    </div>
    <div id="contenedor"> 
        
        <div id="calendar">
            
        </div>
        
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
          
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agendar cita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="scripts/insertsession.php" method="POST">
                    <div class="modal-body">
                       <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre de la Empresa</label>
                            <input type="text" name="project" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          
                        </div>
                        <div class="form-group">
                          <label for="phone">Telefono</label>
                          <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          
                        </div>
                        Selecciona tu servicio

                            <select class="form-select" aria-label="Default select example" name="services" required>
                                <option disabled selected value>Elegir...</option>
                                <option value="asesoriafinanciera">Asesoría Financiera</option>
                                <option value="estudiodemercado">Estudio de Mercado</option>
                                <option value="manualorganizacional">Manual de Estructura Organizacional</option>
                                <option value="manualcorporativo">Manual Gobierno Corporativo</option>alejandro.martinez@aantik.com.mx
                                <option value="proyecciones">Proyecciones Financieras</option>
                                <option value="indicadores">Tablero de Indicadores Clave de Desempeño</option>
                                <option value="valuacionempresa">Valuación de Empresa</option>
                                <option value="cfo">CFO virtual</option>
                                <option value="credito">Pre-califica tu crédito</option>
                            </select>
                            <div class="form-group">
                                <label for="fecha">Horario Elegido</label>
                                
                                <input type="text" name="date" id="fecha" class="form-control" value="" readonly>
                            </div>
                            
                           
                            
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="aceptar">Aceptar</button>
                        <!--<button type="button" class="btn btn-warning">Modificar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm">
                    <video class="video-fluid z-depth-1" autoplay loop muted>
                        <source class="embed-responsive-item" src="https://finanzas-aantik.com/wp-content/uploads/2020/11/VIDEO-2020-11-13-21-15-25.mp4" type="video/mp4"></source>
                    </video>
                </div>
                <div class="col-sm">
                    <div id="bienvenidoaantik">
                        <p>Tomar acción es el detonante para llegar aún mas lejos de lo que esperábamos.</p>
                        <p>Bienvenido a Aantik.</p>
                    </div>
                    <div class="align-items-center" id="imagenbienvenido">
                        <img class="img-fluid mx-auto d-block" src="Imagenes/simboloaantik.png" alt="" style="width: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container agendar">
        <div class="row">
            <div class="col-sm">
                <div class="titulo-agendar">
                    CONTACTO
                </div>
                <div class="contacto-info">
                    <img class="img-fluid" src="Imagenes/phone-100x100.png" alt="">
                    <div >(55)39174439</div>
                </div>
                
                <div class="contacto-info">
                    <img class="img-fluid" src="Imagenes/mail-100x100.png" alt="">
                    <div>contacto@finanzas-aantik.com</div>
                </div>
                <div class="contacto-info">
                    <img class="img-fluid" src="Imagenes/location-100x100.png" alt="" style="width:7%; height:7%">
                    <div>Av. Santa Fe 505, Mezzanine 2B-1er piso, Santa Fe, Cuajimalpa de Morelos, 01219, Ciudad de Mexico.</div>
                </div>
            </div>
            <div class="col-sm">
                <div class="titulo-agendar">
                    INGRESA TUS DATOS
                </div>
                <div class="col-sm">
                    <form action="">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <input type="text" name="nombre" class="form-control mb-2 borde" id="nombre" placeholder="Escribe tu nombre(requerido)" required>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="email" class="form-control mb-2 borde" id="correo" placeholder="Escribe tu correo electrónico(requerido)"required>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="phone" class="form-control mb-2 borde" id="phone" placeholder="Escribe tu celular"required>
                            </div>
                            <div class="col-auto">
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu mensaje(requerido)"required></textarea>
                            </div>
                            <div class="col-auto" id="enviar">
                                <button  type="submit"  class="btn btn-primary" id="btnenviar">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <footer>
        <div class="pie">
            <h2>Atención personalizada</h2>
            <img src="Imagenes\zoom1.png" alt="" >
        </div>
        
    </footer>
    <!-- <script src="js/calendario.js"></script> -->
    <script src="js/agenda.js"></script>
    <script src="js/main.js"></script>
    <script src="js/locales-all.js"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
	<script src="js/Inicio.js"></script>
</body>
</html>
