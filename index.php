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
                <li class="menu-item-divided pure-menu-selected">
                    <a href="index.php">HOME</a>
                </li>
                <li><a href="speedtest.php">Speed Test</a></li>
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
            
            <?php 
              if(!$mortal){
                    echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
                    echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";
              }else{
                echo "<h1>Bienvenido </h1>";
                echo "<h2> simple mortal, tu dirección ip es : $ipaddress </h2>";

              }
            ?>
            <!--<h2>simple mortal</h2>-->
        </div>

        <div class="content">
            <h2 class="content-subhead">¿Como se usa esto?</h2>
            <p>
               Esta es la página principal, en el menú derecho puedes encontrar los links para pasearte por la página, buen viaje!
            </p>

          <div class="content">
            <h2 class="content-subhead">Blaaa video!</h2>
           
            
              <video width="600" height="440" autoplay controls>
                  <?php  if($mortal){
                    echo '<source src="video/heman.mp4" type="video/mp4">';
                  }else{
                    echo '<source src="video/bobesponja.mp4" type="video/mp4">';
                  }?>
              Tu navegador no soporta videos :(
            </video>
            
              
            
          </div>
            

            
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
