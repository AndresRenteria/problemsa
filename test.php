<?php 
 if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
		echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
		echo ip2long($pipaddress);
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
        echo "Your IP address is : $ipaddress";
        print " ";
       	echo "<p> ".ip2long($ipaddress). "</p>";
    }

?>
 

