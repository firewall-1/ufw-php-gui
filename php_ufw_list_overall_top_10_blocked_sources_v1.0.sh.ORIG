#/bin/bash
# This Script lists the UFW TOP 10 SOURCE IPs
echo `zcat -f /var/log/syslog* | awk ' /'SRC='/ {print $12} ' | cut -d "=" -f2 | egrep -v "(^\s*$|^#)" | sort -nr | uniq -c | sort -nr | head -10 > /var/log/php_ufw_overall_top10_blocked_src_ip_output.txt`
cat /var/log/php_ufw_overall_top10_blocked_src_ip_output.txt
