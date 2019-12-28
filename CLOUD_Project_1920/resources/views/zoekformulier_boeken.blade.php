<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta author="Lukas Renckens" />
        <title>Zoekformulier boeken</title>
    </head>
    <body>
        <h1>Zoeken op ISBN-nummer</h1>
        <form action="/boek" method="post">
            @csrf
            <label for="isbn">ISBN-nummer:</label>
            <input type="number" id="isbn" name="isbn" placeholder="ISBN"><br>
            <small id="isbnHelp">Zowel ISBN 10 als 13 zijn geldig (bv. 9780262037242)</small><br>
            <input type="submit" value="Zoek op ISBN">
        </form>
        <h1>Zoeken op zoekterm</h1>
        <form action="/boeken" method="post">
            @csrf
            <label for="zoekterm">Zoekterm:</label>
            <input type="text" id="zoekterm" name="zoekterm" placeholder="Zoekterm"><br>
            <small id="zoektermHelp">Dit mag eender welke zoekterm zijn.</small><br>
            <input type="submit" value="Zoek op zoekterm">
        </form>
    </body>
</html>

