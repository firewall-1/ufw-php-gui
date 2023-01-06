<?php
$src_ip = $_POST["src_ip"];
if(!filter_var($src_ip, FILTER_VALIDATE_IP)) {
   echo "Not a valid IP address!";
   exit();
}
$src_ip = $_POST["src_ip"];
echo "You are searching for blocked ports from source IP: $src_ip";

echo "Lists the blocked ports by UFW from source IP address $src_ip"; 
$result1 = shell_exec("sudo /var/www/scripts/php_ufw_list_blocked_ports_for_specific_ip.sh {$_POST["src_ip"]}");

echo "<pre>$result1</pre>";
?>
