@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start prestashopApache
goto end

:stop

"C:/xampp/htdocs/prestashop/apache2\bin\httpd.exe" -n "prestashopApache" -k stop

:end
exit
