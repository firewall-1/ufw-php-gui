<?php
echo "Lists the TOP 10 blocked source IP addresses including the overall hitcount from UFW"; 
$result1 = shell_exec('sudo /var/www/scripts/php_ufw_list_overall_top_10_blocked_sources.sh');
echo "<pre>$result1</pre>";

echo "Lists the TOP 10 blocked source IP addresses per day including the overall hitcount from UFW"; 
$result1 = shell_exec('sudo /var/www/scripts/php_ufw_list_overall_top_10_blocked_sources_per_day.sh');
echo "<pre>$result1</pre>";
?>
