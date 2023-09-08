<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Si presentan el siguiente error: Connection could not be established with host "smtp.gmail.com:456...
Es porque el servidor de SMPT (encargado de enviar los emails), utiliza el puerto 587, y el puerto 465 es para el certificado.
Solucion: cambiar de puerto, reemplazar el 587 por 465 en la variable MAIL_PORT. 


![solucionGmailsEnvios](https://github.com/juanlti/AppWeb-Mailable/assets/47389717/a32a93fd-a7a2-45ee-9742-8b2fcd72c3e1)
