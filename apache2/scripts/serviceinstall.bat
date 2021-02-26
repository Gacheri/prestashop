@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/prestashop/apache2\bin\httpd.exe" -k install -n "prestashopApache" -f "C:/xampp/htdocs/prestashop/apache2\conf\httpd.conf"

net start prestashopApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop prestashopApache >NUL
"C:/xampp/htdocs/prestashop/apache2\bin\httpd.exe" -k uninstall -n "prestashopApache"

:end
exit
