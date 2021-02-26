@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\prestashop/mysql\bin\mysqld.exe" --install "prestashopMySQL" --defaults-file="C:\xampp\htdocs\prestashop/mysql\my.ini"

net start "prestashopMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "prestashopMySQL" >NUL
"C:\xampp\htdocs\prestashop/mysql\bin\mysqld.exe" --remove "prestashopMySQL"

:end
exit
