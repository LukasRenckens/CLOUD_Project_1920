@extends('index')

@section('eigen_inhoud')

@endsection
@yield('test')
@section('extra_inhoud')



            <div class="card">
                <div class="card-header">Ingeven van punten in een klas</div>

                <div class="card-body">
                    
                    <html>
        <hr/>
        <p>Geef de toets en punten in</p>
</html>

<form action="/punten/uploadPunten" method ="post">
    @csrf
    <!--   commentaar -->
    <table>
         <tr>
            <td> 
                 <p>Vak:</p>
                 
            </td> 
            <td>    
                <input type='text' name='vak' value='Wiskunde' />
            </td> 
        </tr>
        <tr>
            <td> 
                 <p>Titel toets:</p>
                 
            </td> 
            <td>    
                <input type='text' name='titel' value='Algebraisch rekenen' />
            </td> 
        </tr>
        <tr>
            <td> 
                 <p>Punten totaal:</p>
                 
            </td> 
            <td>    
                <input type='number' name='maximum' value='20' />
            </td> 
        </tr>
        <tr>
            <td> 
                 <p>Behaalde cijfers studenten:</p>
                 
            </td> 
           
        </tr>
        
        <?php
            for ($x = 0; $x < sizeof($studentNaam); $x++) {
                 echo "<tr>";
                 echo "<td>$studentNaam[$x] $studentVoornaam[$x]:</td>";
                 echo "<td><input type='number' name='punten[]' value = '$x'/></td>";
                 echo "</tr>";
            }
        ?>
          <tr>
            <td> 
                
                <?php
                    for ($x = 0; $x < sizeof($studentNaam); $x++) {
                        echo " <input type='hidden'  name='naam[]' value= '$studentNaam[$x]'>";
                        echo " <input type='hidden'  name='voornaam[]' value= '$studentVoornaam[$x]'>";
                        echo " <input type='hidden'  name='studentennummer[]' value= '$sudentNummer[$x]'>";
                }
                ?>      
            </td>
            <td> 
                    <input type='submit' value="Insturen"/>               
            </td> 
           
        </tr>
         

    </table>  
</form>

<html>
        <p>Einde print studenten</p>
        <hr/>
</html>
@stop
                    
                </div>
            </div>


