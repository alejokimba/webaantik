<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes somos?</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="css/quienessomos2.css">
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
                       <li class="nav-item"><a class="nav-link" href="Blogfinanciero.html">Blog Financiero</a></li>
                       <li class="nav-item" id="logo"><a class="nav-link" href="#"><img src="Imagenes/simboloaantik.png" alt="" style="width:60%;"></a></li>
                       <li class="nav-item"><a class="nav-link" href="Agendarcita.php">Contacto</a></li>
                       <li class="nav-item"><a class="nav-link" href="dashboard.html">Vista Aantik al mercado</a></li>
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
  <!--   
    <div class="container-fluid quienessomos">
        
        <div class="row">
            <div class="col-sm-2">
                <img src="Imagenes/Icono Blanco.png" class="img-fluid"  alt="" style="width: 60%;">
            </div>
            <div class="col-sm">
                <div class="texto">
                    <div class="container">
                        <figcaption>sdads</figcaption>
                        <h1>¿Quiénes Somos?</h1>
                    
                        <p>Aantik es una consultora financiera creada para ayudar a los pequeños y medianos empresarios a entender y controlar las finanzas de su negocio.</p>
                        <p>Contamos con la capacidad de trabajar con todo tipo de industrias.</p>
                        <p>Nuestros procesos tecnológicos eficientes disminuyen el tiempo y costos de servicios.</p>
                        <p>Somos accesibles para los pequeños y medianos empresarios, para que compitan con los grandes.</p>
                        <h1 id="ayudar">Aantik=Ayudar en maya</h1>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
     -->
    <figure class="textcenter">
        <img class="img-fluid" src="./Imagenes/quienessomos.png" alt="" >
        <figcaption> 
            <img id="icono-blanco" src="./Imagenes/Icono Blanco.png" alt="">
            <h1>¿Quiénes Somos?</h1>
            <p>Aantik es una consultora financiera creada para ayudar a los pequeños y medianos empresarios a entender y controlar las finanzas de su negocio.</p>
            <p>Contamos con la capacidad de trabajar con todo tipo de industrias.</p>
            <p>Nuestros procesos tecnológicos eficientes disminuyen el tiempo y costos de servicios.</p>
            <p>Somos accesibles para los pequeños y medianos empresarios, para que compitan con los grandes.</p>
            <h1 id="ayudar">Aantik=Ayudar en maya</h1>
        </figcaption>
    </figure>

     <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="titulo">
                    Filosofia
                </div> 
            </div>
        </div>
            
        <div class="row val">
            <div class="col-sm valores">
                Misión
                <div class="container carta">
                    <div class="flip-card">
                        
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            
                                <div class="icono">
                                    <img class="img-fluid" src="Imagenes/mision.png" alt="" style="width: 50%;">
                                </div>
                            </div>
                            <div class="flip-card-back" id="mision"> 
                                <div class="container">
                                    <div class="filosofia-texto">
                                        Brindar herramientas financieras a las PyMES mexicanas a precios accesibles para que compitan en sus industrias.
                                        Ayudar a nuestros clientes con sus objetivos, para que sigan generando empleos que sostienen familias.
                                    </div>
                                </div>       
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm valores">
                Visión
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            
                            <div class="icono">
                                <img class="img-fluid" src="Imagenes/vision.png" alt="" style="width: 50%;">
                            </div>
                            
                        </div>
                        <div class="flip-card-back" id="vision">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="filosofia-texto">
                                            Ser la consultora financiera de cabecera de las PyMES mexicanas, ayudándolas a tomar las mejores decisiones de negocio para que contribuyan al bienestar de su comunidad (empleados, proveedores, clientes y accionistas).
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm valores">
                Valores
                <div class="flip-card">
                    
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            
                            <div class="icono">
                                <img class="img-fluid" src="Imagenes/valores.png" alt="" style="width:50%;">
                            </div>
                            
                        </div>
                        <div class="flip-card-back" id="valor">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="filosofia-texto">
                                            <p>Sentido  humano</p>
                                            <p>Honestidad</p>
                                            <p>Servicio</p>
                                            <p>Diligencia</p>
                                            <p>Innovación</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-sm">
                <div class="titulo">
                    Nuestro equipo
                </div>  
            </div>
        </div>
        <div class="container nosotros">
            <div id="carouselExampleDark" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" >
                        <div class="row integrantes">
                            <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/pau2.png" alt="" style="width: 100%">
                                                <h2>Stefanie Paulina Jiménez Tapia</h2>
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                <div class="descripcion">
                                                    Financiera por la Universidad del Valle de México, ha brindado asesoría a PYMES en diferentes partes del país, en industrias como logística, de alimentos y bebidas, hidrocarburos, servicios de cuidado personal, agroindustrial, servicios educativos, entre otros.
                                                    Con la convicción firme de que las PYMES son el motor de Latinoamérica y que la tecnología les puede acercar los servicios de consultoría, coliderea Aantik creando contenido educativo, analizando y asesorando financieramente a los clientes de la firma.
                                                    Disfruta de hacer ejercicio en especial correr y jugar futbol, así como de leer, uno de sus libros favoritos es "La vocecita" de Blair Singer.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/Alex.png" alt="" style="width: 73%;">
                                                <div class="nombre">
                                                    <h2>Alejandro Guadarrama San Lorenzo</h2>
                                                </div>
                                               
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                    <div class="descripcion">
                                                        Ingeniero certificado de Azure Cloud con 6 años de experiencia en implementación, administración, soporte y supervisión de entornos de MS Azure. Clientes como SAT, América Móvil, Univision, Cinépolis y municipio de Nezahualcóyotl, y proyectos en conjunto con algunos Partners de Microsoft y Microsoft mismo.
                                                    </div>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row integrantes">
                            <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/joseeduardo2.jpg" alt="" style="width: 95%;">
                                                <div class="nombre">
                                                    <h2>José Eduardo Ceballos Jurado</h2>
                                                </div>
                                               
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                    <div class="descripcion">
                                                        Actualmente me encuentro estudiando una licenciatura en Finanzas y Banca y colaborando de manera profesional con Aantik, dentro de mis principales funciones dentro de Aantik se encuetran el apoyo a mi equipo de trabajo con los servicios finaniceros que ofrecemos al cliente, la redacción del blog Financiero de Aantik, analisis de datos, creación y consultas de bases de datos en programa SQL.
                                                    </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/jaquie.png" alt="" style="width: 73%;">
                                                <div class="nombre">
                                                    <h2>Jaqueline</h2>
                                                </div>
                                               
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                    <div class="descripcion">
                                                        Mercadóloga y Publicista por la Universidad Mexicana, es  desarrolladora del contenido educativo y la imagen de Aantik en redes sociales, programación de contenido, creación de publicidad, diseño de presentaciones ejecutivas, Campañas de publicidad, Diseño de dashboard  entre otros.
                                                        Disfruta de pasar tiempo con la familia, jugar futbol y su libro favorito es CREATIVIDAD, S. A. Cómo llevar la inspiración hasta el infinito y más allá.
                                                    </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="carousel-item">
                        <div class="row integrantes">
                           <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/gersonlozano.png" alt="" style="width: 100%;">
                                                <div class="nombre">
                                                    <h2>Gerson Lozano</h2>
                                                </div>
                                               
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                <div class="descripcion">
                                                +15 años en el sector financiero evaluando y otorgando créditos. Experto en  planificación estratégicas a largo plazo.
                                                En Aantik coordina la relación con instituciones financieras y análisis de crédito.
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="col-sm">
                                <div class="container">
                                    <div class="flip-card2">
                                        <div class="flip-card-inner2">
                                            <div class="flip-card-front2">
                                                <img class="img-fluid mx-auto d-block rounded" src="Imagenes/alejandromartinez.png" alt="" style="width: 100%;">
                                                <div class="nombre">
                                                    <h2>Alejandro Martínez  López</h2>
                                                </div>
                                            
                                            </div>
                                                
                                            <div class="flip-card-back2">
                                                
                                                <div class="descripcion">
                                                +10 años experiencia en puestos directivos. Asesor experto en evaluación de proyectos financieros, desarrollo de nuevos productos y procesos, evaluación de KPIs.
                                                Líderea el acompañamiento y asesoramiento de clientes Aantik.
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>

                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#carouselExampleDark" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
               
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
            <div class="row">
                <div class="col-sm">
                    <a href="#" >
                        <img class="img-fluid" src="Imagenes\zoom1.png" alt="" >
                    </a>
                    
                </div>
            </div>
        </div>
    </footer>
   <!--  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script> -->
<script src="js/Inicio.js"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</body>
</html>