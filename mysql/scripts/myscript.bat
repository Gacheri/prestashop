@echo off
"C:\xampp\htdocs\prestashop/mysql\bin\mysql.exe" --defaults-file="C:\xampp\htdocs\prestashop/mysql\my.ini" -u root -e "DELETE FROM mysql.user WHERE User=''; CREATE USER 'root'@'127.0.0.1' IDENTIFIED BY '%1'; GRANT ALL PRIVILEGES ON *.* TO 'root'@'127.0.0.1' WITH GRANT OPTION;ALTER USER 'root'@'localhost' IDENTIFIED BY '%1';"
