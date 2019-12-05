@extends('master')
@section('titel','gevonden')
@section('eigen_inhoud') 
    @foreach ($students as $student)   
        <!--<div style="background-color:#eee;margin:10px;float:left">
           <img src="{{$student->studentennummer}}" alt="foto van een laptop" />-->
            <h3>{{$student->naam}}</h3>
            <h4>&euro; {{$student->voornaam}}</h4>
        </div>
    @endforeach
@stop