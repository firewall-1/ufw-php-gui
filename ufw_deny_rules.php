<?php
$YES = $_POST["YES"];
$result1 = shell_exec("sudo /var/www/scripts/php_ufw_list_deny_rules.sh");
echo "<pre>$result1</pre>"
?>  
