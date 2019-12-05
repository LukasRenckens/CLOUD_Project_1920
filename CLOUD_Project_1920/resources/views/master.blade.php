<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta author="Niels Jongen" />
        <title>KU Leuven &amp; UHasselt rules @yield('titel')</title>
    </head>
    <body>
        <h1>Welkom op mijn pagina @yield('titel')</h1>
        <p>Dit is een paragraaf.</p>
        <p>Een tweede paragraaf - JAJA</p>
        @yield('eigen_inhoud')
    </body>
</html>
