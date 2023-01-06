#/bin/bash
src_ip=$1

echo "You are inserting SOURCE IP: $src_ip" > /var/log/php_ufw_insert_specific_ip.txt
ufw insert 1 deny from $src_ip to any >> /var/log/php_ufw_insert_specific_ip.txt
if [ $? -eq 0 ]
then
  echo "UFW rule inserted succesfully" >> /var/log/php_ufw_insert_specific_ip.txt
  cat /var/log/php_ufw_insert_specific_ip.txt
  exit 0
else
  echo "UFW rule insertion aborted" >&2 >> /var/log/php_ufw_insert_specific_ip.txt
  cat /var/log/php_ufw_insert_specific_ip.txt
  exit 1
fi
