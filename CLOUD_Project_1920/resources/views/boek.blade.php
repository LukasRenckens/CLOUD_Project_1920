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
        <title>Boek</title>
    </head>
    <body> 
        <h1><u>Zoekresultaat:</u></h1>
        <h2>Titel: {{$book->title}}</h2>
        <h3>Ondertitel: {{$book->subtitle}}</h3>
        <h3>Auteurs:
            @foreach ($book->authors as $author)
                {{$author}}, 
            @endforeach
        </h3>
        @foreach ($book->thumbnail as $thumbnail)
            <img src="{{$thumbnail}}" alt="thumbnail" />
            @break;
        @endforeach
        <p>
            Uitgever: {{$book->publisher}}<br>
            Datum van uitgave: 
                @foreach($book->publishedDate as $date)
                    {{$date}}
                @endforeach<br>
            Print type: {{$book->printType}}<br>
            Aantal pagina's: {{$book->pageCount}}<br>
            Gemiddelde beoordeling: {{$book->averageRating}}<br>
            Taal: {{$book->language}}<br>
            Categorie:
                @foreach ($book->categories as $categorie)
                   {{$categorie}}, 
                @endforeach
        </p>
    </body>
</html>

