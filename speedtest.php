<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Speed test </title>

    


<link rel="stylesheet" href="css/pure-release-0.5.0/pure-min.css">




  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  
    

</head>
<body>
<?php 
            $mortal=False;
             if (getenv('HTTP_X_FORWARDED_FOR')) {
                    $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
                    $ipaddress = getenv('REMOTE_ADDR');
                echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
                echo ip2long($pipaddress);
              } else {
                    $ipaddress = getenv('REMOTE_ADDR');
                    
                    if($ipaddress == "10.0.0.2" || $ipaddress == "10.64.0.2" || $ipaddress == "10.128.0.2" || $ipaddress == "10.43.19.91"){
                      //10.0.0.2 gda
                      //10.64.0.2 mty
                      //10.128.0.2 cem
                      //debug only
                      //echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
                      //echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";
                      $mortal = False;
                    
                    }else{
                      //simples mortales
                      $mortal = True;
                      //echo "<h1>Bienvenido </h1>";
                      //echo "<h2> simple mortal, tu dirección ip es : $ipaddress </h2>";
                    }
                    //print " ";
                    //echo "<p> ".ip2long($ipaddress). "</p>";
                }

            ?>


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
             <li > <a href="index.php">HOME</a></li>
                <li class="menu-item-divided pure-menu-selected"><a href="#">Speed Test</a></li>
                <li><a href="#">Comandos cisco</a></li>

                <li >
                    <a href="#">Diagrama de Red</a>
                </li>
                <?php 
                if(!$mortal){
                    echo '<li><a href="eject.php">Sacar charola CD</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Speed TEST</h1>
        </div>

        <div class="content">
            <h2 class="content-subhead">SpeedTest</h2>
            <script src="js/speedtest.js"></script>
            <button onclick="showResults()">Empezar el TEST</button>
            <input type="button" value="Reinicar Parámetros" onClick="window.location.reload()">
            
          <div class="content">
            
            
            
            <div class="pure-g">
                <div class="pure-u-1-3"><p>Bits por segundo</p></div>
                <div class="pure-u-1-3"><p>Kilobits por segunto</p></div>
                <div class="pure-u-1-3"><p>Megabits por segundo</p></div>
            </div>
            <div class="pure-g">
                <div class="pure-u-1-3"><p id="speedBps"></p></div>
                <div class="pure-u-1-3"><p id="speedKbps"></p></div>
                <div class="pure-u-1-3"><p id="speedMbps"></p></div>
            </div>

            <h2> Parámetros de su conexión</h2>
            <p id = "parametros"></p>
           
          </div>
            

            
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
