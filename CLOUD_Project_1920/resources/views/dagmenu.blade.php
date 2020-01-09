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
        <title>Dagmenu</title>
    </head>
    <body>
        <a href="/dagmenu" name="top">&lArr; Terug</a>
        <h1><u>Dagmenu</u></h1>
        <h2>Dagsoep</h2>
        <p>{{$result->dagsoep->dagsoep}}</p>
        <h2>Hoofdgerecht</h2>
        <p>
            {{$result->hoofdgerecht->vlees}}<br>
            {{$result->hoofdgerecht->groenten}}<br>
            {{$result->hoofdgerecht->aardappelen}}<br>
        </p>
        <h2>Nagerecht</h2>
        <p>{{$result->nagerecht->nagerecht}}<br></p>
    </body>
</html>

