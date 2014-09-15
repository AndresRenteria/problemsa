<?php
 
// for Linux
$result = shell_exec('sudo /var/www/html/bin/morning.sh');
 
// for Windows
// $result = shell_exec('dir');
 
echo "<pre>$result</pre>";
 
?>