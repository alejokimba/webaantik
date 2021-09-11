<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Financiero</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="css/Blogfinanciero2.css">
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
                       <li class="nav-item"><a class="nav-link" aria-current="page" href="Inicio.html">Inicio</a></li>
                       <li class="nav-item"><a class="nav-link" href="quienessomos.php">Nosotros</a></li>
                       <li class="nav-item"><a class="nav-link" href="Nuestrosservicios.php">Servicios</a></li>
                       <li class="nav-item"><a class="nav-link" href="Blogfinanciero.php">Blog Financiero</a></li>
                       <li class="nav-item" id="logo"><a class="nav-link" href="#"><img src="Imagenes/simboloaantik.png" alt="" style="width:60%;"></a></li>
                       <li class="nav-item"><a class="nav-link" href="Agendarcita.php">Contacto</a></li>
                       <li class="nav-item"><a class="nav-link" href="dashboard.php">Vista Aantik rápida al mercado</a></li>
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
           <div class="titulo-texto">
            Blog financiero
           </div>  
       </div>
       <div class="row salto">
           <div class="col-sm">
               <div class="contenedor">
                    <img class="img-fluid mx-auto d-block" src="Imagenes/10.png" alt="" > 
                    <div class="texto-servicios">
                        INVERSIÓN Y AHORRO
                    </div>
               </div>
                
           </div>
           <div class="col-sm">
               <div class="contenedor">
                    <img class="img-fluid mx-auto d-block" src="Imagenes/8.png" alt="">
                    <div class="texto-servicios">
                        PYMES
                    </div>
               </div> 
           </div>
           <div class="col-sm">
               <div class="contenedor">
                <img class="img-fluid mx-auto d-block" src="Imagenes/9.png" alt="">
                <div class="texto-servicios">
                 SERVICIOS EMPRESARIALES DE CALIDAD
                </div> 
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-sm">
               <div class="contenedor">
                    <img class="img-fluid mx-auto d-block" src="Imagenes/7.png" alt="">
                    <div class="texto-servicios">
                        SECTOR FINANCIERO
                    </div>
               </div>
           </div>
           <div class="col-sm">
               <div class="contenedor">
                    <img class="img-fluid mx-auto d-block" src="Imagenes/14.png" alt=""> 
                    <div class="texto-servicios">
                        TENDENCIAS 2021
                    </div>
                </div>
           </div>
           <div class="col-sm">
               <div class="contenedor">
                    <img class="img-fluid mx-auto d-block" src="Imagenes/15.png" alt=""> 
                    <div class="texto-servicios">
                        FINANZAS
                    </div>
                </div>
            </div>
       </div>
   </div>
   <div class="container-fluid seccion">
       <div class="row justify-content-md-center">
           <div class="col"><img class="img-fluid" src="Imagenes/calendario.png" alt="" style="width: 15%;"></div>
       </div>
       <div class="row justify-content-md-center">
           <div class="col" id="agendar"><p>¿Listos para agendar una sesión con nosotros?</p></div>
       </div>
       <div class="row justify-content-md-center" style="margin:40px 0 40px 0">
           <div class="col"><a id="link-agendar" href="Agendarcita.php">Agendar</a></div>
       </div>
   </div>
   <footer>
    <div class="container-fluid pie">
        <div class="row justify-content-md-center">
            <div class="col-sm">
                <h2>Atención personalizada</h2>
            </div>
        </div>
      
            <div class="row">
                <div class="col-1">

                    <div class="linea-azul-left">
                   
                    </div>
                    <div class="linea-tur-left">
                        
                    </div>
                </div>
                <div class="col">
    
                      <a href="#">
                        <img class="img-responsive mx-auto d-block" src="Imagenes\zoom1.png" alt="" style="width:auto; margin:0 auto; height: 10vh;">
                    </a>  
                </div>
                <div class="col-1">
                    <div class="linea-right">
                       
                    </div>
                </div>
            </div>
      
    </div>
</footer>
<script src="js/Inicio.js"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</body>
</html>