<?php
$mortal = False;
 if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
    echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
    echo ip2long($pipaddress);
  } else {
        $ipaddress = getenv('REMOTE_ADDR');
        
        if($ipaddress == "10.0.0.2"){
          //10.0.0.2 gda
          echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
          echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";
        
        }else if($ipaddress == "10.64.0.2"){
          //10.64.0.2 mty
          echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
          echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";

        }else if($ipaddress == "10.128.0.2"){
          //10.128.0.2 cem
          echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
          echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";

        }else if($ipaddress == "10.43.19.91"){ //debug only
          echo "<h1>Bienvenido Capitan, todos abordo!!!</h1>";
          echo "<h2> capitan!, su dirección ip es : $ipaddress </h2>";
        }else{
          //simples mortales
          $mortal = True;
          echo "<h1>Bienvenido </h1>";
          echo "<h2> simple mortal, tu dirección ip es : $ipaddress </h2>";
        }
        //print " ";
        //echo "<p> ".ip2long($ipaddress). "</p>";
    }

if(!$mortal){
	$result = shell_exec('sudo /var/www/html/bin/morning.sh');
}
 
 
echo "<pre>$result</pre>";
 
?>