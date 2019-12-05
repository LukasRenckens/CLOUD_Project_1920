@extends('master')

@section('titel','zoek students')
@section('eigen_inhoud')

<html>
        <hr/>
        <p>Start print studenten</p>
</html>

<html>
   <body>
       <h1><?php echo $name[0]; ?></h1>
       <h1><?php echo $name[1]; ?></h1>
       <h1><?php echo sizeof($name); ?></h1>
       <form action="/students/print" method ="post"> <!-- of found -->
        @csrf
       <h2> 
            <?php
                   
                    //for ($x = 0; $x < sizeof($name); $x++) {

                    for ($x = 0; $x < sizeof($name); $x++) {
                         echo "The number is: $x en de waarde is $name[$x] <br>";
                         echo  " <input type='number' name='hallo[]' value = '500'/> <br>";
                    }
            ?>

           <input type='submit' value="Insturen"/>
      </form>

   </body>
</html>

<html>
        <p>Einde print studenten</p>
        <hr/>
</html>
@stop
