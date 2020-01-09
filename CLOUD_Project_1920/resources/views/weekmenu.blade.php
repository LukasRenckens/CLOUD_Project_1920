<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    $i = 0;
    $dagen = ['0'=>'Maandag', '1'=>'Dinsdag', '2'=>'Woensdag', '3'=>'Donderdag', '4'=>'Vrijdag'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta author="Lukas Renckens" />
        <title>Weekmenu</title>
    </head>
    <body>
        <a href="/weekmenu" name="top">&lArr; Terug</a>
        <h1><u>Weekmenu</u></h1>
        
        @foreach ($result->Menu as $menu)
            <h2>{{$dagen[$i]}}</h2>
            <h3>Dagsoep</h3>
            <p>{{$menu->dagsoep->dagsoep}}</p>
            <h3>Hoofdgerecht</h3>
            <p>
                {{$menu->hoofdgerecht->vlees}}<br>
                {{$menu->hoofdgerecht->groenten}}<br>
                {{$menu->hoofdgerecht->aardappelen}}<br>
            </p>
            <h3>Nagerecht</h3>
            <p>{{$menu->nagerecht->nagerecht}}<br></p>
            <hr>
            <?php $i = $i + 1;?>
        @endforeach
        <a href="#top">&uArr; Top</a>
    </body>
</html>

