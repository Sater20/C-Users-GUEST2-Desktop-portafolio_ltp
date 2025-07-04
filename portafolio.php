<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a4063c8cf8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Las Tiendas Del Pintor </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="responsi.css">
</head>
<body>
    <header id="encabezado">
        <nav id="navbar">
            <div class="container">
                <div class="logo"><img src="/logos/flamuko.png" alt=""></div>
                <ul class="=nav">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                    <li><a href="#alianzas">Alianzas</a></li>
                    <li><a href="#ubicaciones">ubicaciones</a></li>
                </ul>
            </div>
        </nav>
        <div id="titulo">
            <div class="container">
                <h1 class="display-1">Las Tiendas Del Pintor</h1>
            </div>
        </div>
    </header>

    <section id="informacion">
        <div class="container">
            <h2>Acerca De Nosotros</h2>
            <div class="contenido">
                <div class="contenido-recuadro">
                    <h4>Historia</h4>
                    <p>
                    Este concepto de negocios fue creado en Valencia, en 1.958, por Don Antonio Zuccaro, para comercializar pintura de alta calidad. 
                    La visión, la ética, la tenacidad y la gran capacidad de trabajo de este empresario, cristalizaron en el Grupo líder del mercado 
                    en la fabricación y distribución de pinturas. Ahora, la tercera generación de la familia Zuccaro proyecta el Grupo en este nuevo milenio,
                     concentrando sus esfuerzos en la explotación del enorme potencial de mercado a nivel nacional.
                </p>
                </div>
                <div class="contenido-recuadro">
                    <h4>Misión</h4>
                    <p>
                    Ser la mejor opción para el cliente en todos los segmentos del mercado, ofreciendo revestimientos y
                     productos afines preferidos por la constancia de su calidad, lo oportuno de su entrega y la competitividad 
                     de sus precios; llenando las expectativas de rentabilidad de sus socios, apoyada en una fuerza laboral satisfecha 
                     y plenamente identificada con el grupo, e integrada con el ambiente y la comunidad.
                </p>
                </div>
                <div class="contenido-recuadro">
                    <h4>Visión</h4>
                    <p>
                    Proyectarnos como una empresa flexible, de alta calidad, velocidad y con una sólida posición en el mercado. Siendo reconocidos 
                    en el ámbito nacional e internacional por ofrecer productos y servicios de primera que satisfagan las necesidades de nuestros clientes, 
                    consumidores, accionistas y el capital humano que conforman esta organización; dedicados a atender todos los segmentos de mercado a través
                     de los canales de distribución, suministrando variedad en marcas, relacionándonos estratégicamente con empresas de avanzada tecnología.
                </p>
                </div>
            </div>
            <div class="contenido">
                <div class="contenido-recuadro">
                    <h4>Variedad</h4>
                    <p>
                    Contamos con el más amplio catálogo de pinturas, recubrimientos, herramientas y 
                    accesorios de las marcas líderes. Desde pinturas decorativas hasta industriales, 
                    tenemos todo lo que necesita para su proyecto, grande o pequeño.
                </p>
                </div>
                <div class="contenido-recuadro">
                    <h4>Asesoría</h4>
                    <p>
                    Nuestro equipo está conformado por expertos apasionados por el color y los materiales. 
                    Ofrecemos asesoría personalizada para ayudarle a elegir el producto perfecto, resolver dudas 
                    y brindarle consejos profesionales para sus acabados.
                </p>
                </div>
                <div class="contenido-recuadro">
                    <h4>Ubicaciones</h4>
                    <p>
                    Con más de 50 años de liderazgo y más de 160 tiendas a nivel nacional,
                     somos la red de pinturas y accesorios más grande de Venezuela. Encuentre 
                     siempre una Tienda del Pintor cerca de usted, ofreciendo calidad y asesoría 
                     experta en todo el país.
                </p>
                </div>
            </div>
        </div>
    </section>

    <section id="cashea">
        <img src="/imagenes/cashea.jpg" alt="">
        <div class="texto">
            <h2>¡Ahora en La Tienda del Pintor puedes pagar con Cashea!</h2>
            <p class="extenso">
            Tu proyecto de pintura ahora es más fácil de lograr en La Tienda del Pintor, 
            pensando siempre en tu comodidad, hemos integrado Cashea como una nueva opción de pago.
            Ahora puedes adquirir todas tus pinturas, herramientas y accesorios favoritos, y pagar 
            en cómodas cuotas sin intereses. Es la solución perfecta para llevar a cabo tus proyectos, 
            grandes o pequeños, de forma más flexible y accesible. Visítanos en cualquiera de nuestras
             más de 160 tiendas a nivel nacional y pregunta por la opción de pago con Cashea.
            Renovar tus espacios nunca fue tan sencillo.
            </p>
        </div>
    </section>

    <h1 class="text-center">Comentarios</h1>
    <div class="container-fluid row"></div>
            <form class="col-5 p-5 m-auto" method="POST">
                <h3 class="text-center">Registro de comentario</h3>
                             <?php
                                 include "model/conn.php";
                                 include "controller/usuario.php";
                                 include "controller/eliminar.php";
                            ?>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                 <input type="text" class="form-control" id="floatingInputGroup1" name="nombre_y_apellido">
                                 <label for="floatingInputGroup1">Nombre y Apellido</label>
                             </div>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email">
                            <label for="floatingInput">Email</label>
                        </div>
                    <div class="form-floating mb-3">
                         <textarea class="form-control" name="nota" id="floatingTextarea2" style="height: 100px"></textarea>
                         <label for="floatingTextarea2">Comentario</label>
                    </div>
                         <div class="input-group mb-3">
                            <div class="form-floating">
                                 <input type="hidden" class="form-control" id="floatingInputGroup1" name="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>">
                             </div>
                         </div>
                <button type="submit" class="btn btn-primary" name="btnenviar" value="ok">Enviar</button>
            </form>

            <div class="comentarios mb-5 p-5">
                <?php
                         include "model/conn.php";
                         $sql = $conn->query( "select * from comentario");
                         while ( $dato = $sql->fetch_object()){ 
                        ?>
                    <div class="card text-bg-dark mb-3 " style="max-width: 18rem;">
                        <div class="card-header text-info"><?= $dato->nombre_y_apellido?> <?= $dato->fecha?></div>
                        <div class="card-body text-info">
                         <p class="card-text"><?= $dato->nota?></p>
                    </div>
                     <div>
                        <a href="editar.php?id=<?= $dato->id?>" class="btn btn-small btn-dark"><i class="bi bi-pencil-square"></i></i></a>
                         <a onclick="return confirm('¿seguro que deseas borrar el comentario?')" href="portafolio.php?id=<?= $dato->id?>"class="btn btn-small btn-dark"><i class="bi bi-trash"></i></a>
                     </div>
                      <?php
                         }
                    ?>
                </div>
             </div>

    <hr>
        <section id="contacto">
         <div class="container">

                <div class="contacto_info">

                    <h2>Contactos</h2>

                    <p>
                     latiendadelpintor@gmail.com
                        0295.50060000
                    </p>

                </div>

                 <div class="contacto_logo">

                    <img src="/logos/flamuko.png" alt="">

                 </div>
    
                 <div class="contacto_social">
                    <a href="#"><img src="/logos/face1.png" alt=""></a>
                    <a href="#"><img src="/logos/x1.png" alt=""></a>
                    <a href="#" ><img src="/logos/inst.png" alt=""></a>
                 </div>     
            </div>
         </section>
        <hr />

        <footer id="footer">
            <p>HAY MUCHO MAS PARA USTED</p>
        </footer>
</body>
</html>