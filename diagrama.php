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

                <li class="menu-item-divided pure-menu-selected">
                    <a href="diagrama.php">Diagrama de Red</a>
                </li>

                 <li><a href="preguntas.php">Preguntas</a></li>
              
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            
           
        </div>

        <div class="content">
           
            
  
            <img src ="video/red.jpg"></img>

            
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
