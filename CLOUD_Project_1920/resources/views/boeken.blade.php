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
        <title>Boeken</title>
    </head>
    <body>
        <h1>Dit zijn de boeken:</h1>
        @foreach ($books as $book)   
                <h3>{{$book->title}}</h3>
                <h4>{{$book->subtitle}}</h4>
                @foreach ($book->authors as $author)
                    <h3>{{$author}}</h3>
                @endforeach
                
                @foreach ($book->thumbnail as $thumbnail)
                    <img src="{{$thumbnail}}" alt="thumbnail" />
                @endforeach
                <br>
        @endforeach
    </body>
</html>

