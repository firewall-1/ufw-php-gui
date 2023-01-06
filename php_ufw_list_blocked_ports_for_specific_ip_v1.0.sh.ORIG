#/bin/bash
src_ip=$1
total_ports=`zgrep -i $src_ip /var/log/syslog* | cut -d " " -f21 | cut -d "=" -f2 | egrep -v "(^\s*$|^#)" | sort -nr | uniq -c | sort -nk2 | wc -l`

echo "You are looking for SOURCE IP: $src_ip" > /var/log/php_ufw_list_blocked_ports_for_specific_ip.txt
echo "Total ports scanned: $total_ports" >> /var/log/php_ufw_list_blocked_ports_for_specific_ip.txt
echo `zgrep -i $src_ip /var/log/syslog* | cut -d " " -f21 | cut -d "=" -f2 | egrep -v "(^\s*$|^#)" | sort -nr | uniq -c | sort -nk2 >> /var/log/php_ufw_list_blocked_ports_for_specific_ip.txt`

cat /var/log/php_ufw_list_blocked_ports_for_specific_ip.txt
