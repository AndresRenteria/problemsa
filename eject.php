4<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Eject </title>

    


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
                <li ><a href="speedtest.php">Speed Test</a></li>
                <li><a href="#">Comandos cisco</a></li>

                <li >
                    <a href="#">Diagrama de Red</a>
                </li>
                <?php 
                if(!$mortal){
                echo '<li class="menu-item-divided pure-menu-selected"><a href="#">Sacar charola CD</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>


    <?php 
    if(!$mortal){
        if (isset($_POST['eject']))
        {
             $result = shell_exec('sudo /var/www/bin/morning.sh');
        }
    echo '<div id="main">
        <div class="header">
            <h1>Sacar Charola</h1>
        </div>
            <div class="pure-g">
                <div class="pure-u-1-2"><img style ="margin-left: 10%; margin-top:30%" src="video/flecha.jpg"></div>
                <div class="pure-u-1-2">

                <form method="post">
                <button name= "eject"class="pure-button pure-button-primary" style="margin-top:32%; margin-left:10%">Eject cd Tray!!!!</button>
                <p>'.$result.'</p>
                </form>
                </div>
               
            </div>
            

            
        </div>
    </div>';

    }else{
        echo '<div id="main"><img style="margin-left:15%; margin-top:10%"src="video/nopw.jpg"></div>';
    }
    ?>
</div>





<script src="js/ui.js"></script>


</body>
</html>
