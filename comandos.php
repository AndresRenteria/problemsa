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
                <li class="menu-item-divided pure-menu-selected"><a href="comandos.php">Comandos cisco</a></li>

                <li>
                    <a href="diagrama.php">Diagrama de Red</a>
                </li>

                 <li  ><a href="preguntas.php">Preguntas</a></li>
              
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Comandos CISCO</h1>
           
        </div>

        <table sytle="margin-left:10%">
<tr>
  <td><strong>Comando</strong></td>
  <td><strong>Definicion</strong></td>

</tr>
  
<tr>
  <td>enable</td>
  <td>entra a modo privilegiado</td>
  
</tr>
 
<tr>
  <td>show running-config</td>
  <td>muestra lo que está haciendo en el router</td>
 
</tr>

 <tr>
  <td>configure terminal</td>
  <td>para entrar a modo configuración</td>
 
</tr>
<tr>
  <td>interface (nombre de la interface)</td>
  <td>entra a la interface para configurarlo</td>
 
</tr>
<tr>
  <td>no shutdown</td>
  <td>prende la interface</td>
 
</tr>
<tr>
  <td>exit</td>
  <td>regresa al estado anterior</td>
 
</tr>
<tr>
  <td>ip address [su ip] [su mascara]</td>
  <td>cambia el IP</td>
 
</tr>
<tr>
  <td>interface range [interface] 0/0-1</td>
  <td>cambia el rango de interface</td>
 
</tr>
<tr>
  <td>interface loopback n</td>
  <td>crea loopback</td>
 
</tr>
<tr>
  <td>show ip route</td>
  <td>muestra tabla de rute</td>
 
</tr>
<tr>
  <td>Dhcline</td>
  <td>hacer el discover</td>
 
</tr>
<tr>
  <td>Ipconfig</td>
  <td>ver el ip de las interfaces</td>
 
</tr>
<tr>
  <td>show version</td>
  <td>muestra la version</td>
 
</tr>

<tr>
  <td>ping [direccion]</td>
  <td>hace un ping</td>
 
</tr>
<tr>
  <td>show mac address-table</td>
  <td>muestra la tabla de mac</td>
 
</tr>
<tr>
  <td>ip dhcp pool [nombre]</td>
  <td>configura el dhcp</td>
 
</tr>
<tr>
  <td>default-router [ip del router con mascara]</td>
  <td>Le da la dirección del default router</td>
 
</tr>
<tr>
  <td>dns [ip del dns server con mascara]</td>
  <td>Le da la dirección del dns</td>
 
</tr>
<tr>
  <td>network [ip de la red con mascara]</td>
  <td>Le da la ip a la network</td>
 
</tr>
<tr>
  <td>ipconfig /renew</td>
  <td>hace el discover en la computadora, da direcciones</td>
 
</tr>
<tr>
  <td>show controller [serial]</td>
  <td>muestra el serial</td>
 
</tr>

<tr>
  <td>clock rate [numero]</td>
  <td>Le da el clock rate al serial</td>
 
</tr>
<tr>
  <td>show ip dhcp binding</td>
  <td>Muestra todas las ip que a dado</td>
 
</tr>
<tr>
  <td>baner motd</td>
  <td>Pone un banner</td>
 
</tr>
<tr>
  <td></td>
  <td></td>
 
</tr>
<tr>
  <td>Enable secret cisco</td>
  <td>Da contraseña al router</td>
 
</tr>
<tr>
  <td>hostname [nombre]</td>
  <td>pone nombre al router</td>
 
</tr>

</table>
 

        <div class="content">
           
            
  
            

            
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
