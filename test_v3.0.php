<?php
$result = shell_exec('sudo /var/www/scripts/php_ufw_list_overall_top_10_sources.sh');
echo "<pre>$result</pre>";
?>
