<?php
echo "Lists the TOP 10 UFW blocked source IP addresses including the overall hitcount from ONE WEEK"; 
$result1 = shell_exec('sudo /var/www/scripts/php_ufw_list_overall_top_10_blocked_sources.sh');
echo "<pre>$result1</pre>";

echo "Lists the TOP 10 UFW blocked source IP addresses including the overall hitcount from TODAY"; 
$result1 = shell_exec('sudo /var/www/scripts/php_ufw_list_overall_top_10_blocked_sources_per_day.sh');
echo "<pre>$result1</pre>";
?>
<form action="seite2_ufw.php" method="post">
Please enter your source IP: <input type="text" name="src_ip" /><br />
<input type="Submit" value="Submit" />
</form
