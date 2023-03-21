<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="icon" type="image/jpg" href="https://i.ibb.co/gPhcmMd/logo-ojo-novus.png"> -->
    <title>Landing Gopass</title>
    <link href="./assets/css/estilos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header">
            <div class="header_logo"><a title="gopass" href="https://gopass.com.co/wp_prod/"><img
                        src="./assets/images/landingGo/PNG/goPass.png" alt=""></a></div>
        </div>
        <div class="navbar">  
        </div>
    </header>
    <div class="tecnologia">
        <div class="tablero1">

        </div>
        <div class="tablero2">
            <img src="./assets/images/landingGo/PNG/tablero.png" alt="parqueaderos">
        </div>
    </div>
    <section class="technology">
        <div class="technology__info-clientes">
            <div class="title">
                <h1>Somos el ecosistema de movilidad</h1>
            </div>
            <div class="landing__titulo">
                <img src="./assets/images/landingGo/PNG/masGrandeDeColomobia.png" alt="Logista Grupo Novus">
            </div>
            <div class="title">
                <h1>con el que pagas sin contacto en:</h1>
            </div>
            <div class="gridImage">
                <div class="img1">
                    <img src="./assets/images/landingGo/PNG/parqueaderosPublicos.png" alt="parqueaderos">
                    <h1>Parqueaderos <br> públicos</h1>
                </div>
                <div class="img2">    
                    <img src="././assets/images/landingGo/PNG/centrosComerciales.png" alt="centros comercial">
                    <h1>Centros Comerciales</h1>
                </div>
                <div class="img3">   
                    <img src="././assets/images/landingGo/PNG/combustible.png" alt="combustible">
                    <h1>Combustible</h1>
                </div>
                <div class="img4">    
                    <img src="././assets/images/landingGo/PNG/restaurantes.png" alt="restaurnates">
                    <h1>Restaurantes <br> y tiendas</h1>
                </div>    
                <div class="img5">
                    <img src="././assets/images/landingGo/PNG/multas.png" alt="multas">
                    <h1>Multas y Comparendos</h1>
                </div>
                <div class="img6">    
                    <img src="././assets/images/landingGo/PNG/asistencia.png" alt="asistencia">
                    <h1>Asistencias <br> y talleres</h1>
                </div>
                <div class="img7">    
                    <img src="././assets/images/landingGo/PNG/peajes.png" alt="peajes">
                    <h1>Peajes</h1>
                </div>
                <div class="img8">    
                    <img src="././assets/images/landingGo/PNG/autoLavados.png" alt="autolavados">
                    <h1>Autolavados</h1>
                </div>    
            </div>
        </div>
    </section>
    <div class="video">
        <div class="youtube">
            <iframe  style="border-radius: 40px;" src="https://www.youtube.com/embed/Jr5QPup8DlE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <footer id="contacto-gruponovus">
        <div class="footer_data">
            <form id="form-contacto" action="./forms/info.php" method="post">
                <div class="gridForm">
                    <div class="gridTitle">
                     <p>Pide tu <b>TAG GRATIS</b> en el siguiente formulario</p>
                    </div>   
                    <div class="gridFormOne">
                        <label for="Name">Nombres y Apellidos</label>    
                        <input type="text" name="nombre" required>
                        <label for="Name">Correo electrónico </label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="gridFormTwo">
                        <label for="Name">Cédula</label>
                        <input class="cedula" type="number" id="cedula" name="cedula" required min="10000000">
                        <label for="Name">Telefono</label>
                        <input class="telefono" type="number" id="telefono" name="telefono" required min="3000000000" max="3999999999">
                    </div>
                    <div class="gridFormThree">
                        <label class="checkData" for="check"> 
                        <input type="checkbox" required name="check" id="check">He leído y acepto los&nbsp;
                        <a href="https://terminos.gopass.com.co" target="_blank">
                        Términos y condiciones.</a></label>
                         <label class="checkData" for="check"> 
                        <input type="checkbox" required name="check" id="check">Has leído y acepto las&nbsp;
                        <a href="https://terminos.gopass.com.co" target="_blank">
                        Políticas de tratamiento de datos.</a></label>
                     </div>
                     <div class="gridFormFour">
                         <button class="nuevo" id="boton" type="submit">Enviar</button>
                     </div>
                    
                </div>
            </form>
        </div>
        <div class="technology__info">
        </div>
        <div class="gridRedes">
        <div class="redes1">
            <p>Descarga la app y síguenos en</p>
            <div class="redes2">
            <div class="instagram"><a title="gopass" href="https://www.instagram.com/gopasscolombia/"><img src="./assets/images/landingGo/PNG/intagram.png" alt=""></a> </div>
            <div class="igGopass"><p>@gopasscolombia</p></div>
            <div class="facebook"><a title="gopass" href="https://www.facebook.com/soygopass/"><img src="./assets/images/landingGo/PNG/facebook.png" alt=""></a></div>
            <div class="fbGopass"><p>Gopass Colombia</p></div>
            </div>
        </div>
        </div>
        <div class="shape">
            <div class="shape-contacto">
                <h1>Contactanos</h1>
                <p>Línea de atención al cliente</p>
                <p>(+57) 6019140014</p>
            </div>
            <div class="shape-apps">
                <a title="gopass" href="https://play.google.com/store/apps/details?id=com.kubo.go_pass&hl=es&pli=1"><img src="./assets/images/landingGo/PNG/apps.png" alt=""></a> 
            </div>
            <div class="shape-gopass">
                <a title="gopass" href="https://gopass.com.co/wp_prod/"><img src="./assets/images/landingGo/PNG/gopass}.png" alt=""></a>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="./app.bundle.js"></script>
<script>
    var input = document.getElementById('telefono');
    input.addEventListener('input', function() {
        if (this.value.length > 10)
            this.value = this.value.slice(0, 10);
    })
    
        
</script>
<script type="text/javascript">
    document.oncontextmenu = function(){return false;}

    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
    });
</script>


</body>

 
$_REQUEST
</html>
