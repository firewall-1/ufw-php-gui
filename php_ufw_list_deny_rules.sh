#/bin/bash
#echo "You are looking for SOURCE IP: $src_ip" > /var/log/php_ufw_list_deny_rules.txt 
echo `ufw status numbered | egrep "DENY IN" -B4  > /var/log/php_ufw_list_deny_rules.txt`

cat /var/log/php_ufw_list_deny_rules.txt
