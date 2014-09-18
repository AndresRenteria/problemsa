<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Redes II &ndash; </title>
    <link rel="stylesheet" href="css/pure-release-0.5.0/pure-min.css">
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
    

</head>
<body>



<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">Redes II</a>

            <ul>
               <li >
                    <a href="index.php">HOME</a>
                </li>
                <li><a href="speedtest.php">Speed Test</a></li>
                <li><a href="comandos.php">Comandos cisco</a></li>

                <?php 
                if(!$mortal){
                    echo '<li><a href="eject.php">Sacar charola CD</a></li>';
                }
                ?>

                <li>
                    <a href="diagrama.php">Diagrama de Red</a>
                </li>

                 <li  class="menu-item-divided pure-menu-selected"><a href="preguntas.php">Preguntas</a></li>

            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Preguntas</h1>
           
        </div>

        <div class="content">
           
            <h4>1) ¿Cuál el el holdtime de CDP?</h4>
    <p>Por default es de 180 segundos</p>
<h4>2) ¿Cuál es el registro de configuración normal de un router cisco?</h4>
    <p>0x2102</p>
<h4>3) ¿Cuál es el registro de configuración para modificar el password desde consola?</h4>
    <p>0x2142</p>
<h4>4) ¿De cuántos kb es un E1?</h4>
    <p>2.054mb = 2054kb</p>
<h4>5) ¿Qué es un CRC?</h4>
    <p>Es un código para detectar errores, este detecta cuando la información está incompleta o con errores</p>
<h4>6) ¿Cómo veo a nivel de comandos qué cable serial está conectado en una interface en particular?</h4>
    <p>Show interface serial 0/0/0</p>
<h4>7) Comente 5 criterios por el cual un router busca el best-path?</h4>
    <p>1) La ruta con mayor prioridad.</p>
    <p>2) La ruta que tenga mayor peso</p>
    <p>3) La ruta con el AS_PATH más corto</p>
    <p>4) La ruta que se recibió primero (si las dos son externas)</p>
    <p>5) La ruta con menor Router-ID</p>
<h4>8) ¿Qué es una distancia administrativa?</h4>
    <p>Es lo que usan los routers cisco para ver cuál ruta usar cuando tienen más de 1</p>
<h4>9) Explica el proceso DORA del dhcp.</h4>
    <p>El proceso DORA(Discovery, Offer, Request, Acknowledge) primero la computadora busca a algun servidor DHCP para que le de una dirección, el servidor responde a la solicitud, la computadora pide una dirección al servidor, el servidor vuelve a enviar un mensaje a la computadora con la dirección IP, la mascara de subred, la dirección del Gateway y otros parámetros DHCP.</p>
<h4>10) ¿En un router qué es load balancing?</h4>
    <p>Distribuye el trabajo de la red por diferentes rutas para que no se congestione la red</p>
<h4>11) ¿Qué tipo de protocolos NO mandan la máscara de subred en sus updates?</h4>
    <p>Ripv1 solo envía direcciones</p>
<h4>12) ¿Qué es un sistema autónomo?</h4>
    <p>Un grupo de redes ip que poseen una política de ruta propia e independiente</p>
<h4>13) ¿Qué es convergencia?</h4>
    <p>Redes, sistemas y servicios que se construyen a partir de otros</p>
<h4>14) Explica el proceso de resolución de nombres de www.cisco.com.mx (trace de dns con todos las 
Interacciones para llegar a resolver el nombre).<h4>
    <p>1)   busca en los rootserver en donde puede encontrar la primera parte</p>
    <p>2)   después de recibir una respuesta busca en los dns servers q encontró la siguiente parte de </p>
    <p>3)   se vuelve a buscar la siguiente parte de la página hasta que encuentre en donde se puede encontrar</p>
    <p>4)   manda un request a alguno de los dns para que lo redireccione a la pagina que está buscando</p>
<h4>15) Explica mecanismos que han hecho que IP versión 4 aún esté vigente<h4>
    <p>Subnetting   separa los bits del network identifier con los bits del host identifier</p>
    <p>Clasless IP  Incrementa la eficiencia del uso de direcciones, agrega prefijos de red</p>

            

            
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
