<?php
 
// for Linux
$result = shell_exec('ls -altp');
 
// for Windows
// $result = shell_exec('dir');
 
echo "<pre>$result</pre>";
 
?>