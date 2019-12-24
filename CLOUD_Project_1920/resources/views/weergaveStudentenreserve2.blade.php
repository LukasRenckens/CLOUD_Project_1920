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
    <!--- hier hoeft dus geen post enzo meer te staan, zie zoekformulier.blad.php,
    het uploaden wordt in de javascript gedaan via een get en geen POST -->
    @csrf
    <!--   commentaar -->
    <table>
         <tr>
            <td> 
                 <p>Vak:</p>
                 
            </td> 
            <td>    
                <input type='text' name='vak' id='vak' value='Wiskunde' />
            </td> 
        </tr>
        <tr>
            <td> 
                 <p>Titel toets:</p>
                 
            </td> 
            <td>    
                <input type='text' name='titel' id='titel' value='Algebraisch rekenen' />
            </td> 
        </tr>
        <tr>
            <td> 
                 <p>Punten totaal:</p>
                 
            </td> 
            <td>    
                <input type='number' name='maximum' id="maximum" value='20' />
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
                 echo "<td><input type='number' name='punten[]' id='punt[$x]' value = '$x'/></td>";
                 echo "</tr>";
            }
        ?>
          <tr>
            <td> 
                
                <?php
                    $size = sizeof($studentNaam);
                    echo " <input type='hidden'  id='size' name='size' value='$size'>";
                    for ($x = 0; $x < $size; $x++) {
                        
                        echo " <input type='hidden'  id='naam[$x]' name='naam[]' value= '$studentNaam[$x]'>";
                        echo " <input type='hidden'  id='voornaam[$x]' name='voornaam[]' value= '$studentVoornaam[$x]'>";
                        echo " <input type='hidden'  id='studentennummer[$x]' name='studentennummer[]' value= '$sudentNummer[$x]'>";
                       
                }
                ?>      
            </td>
            <td> 
                    <input type='submit' value="Insturen" onclick="printHelloWorld()"/>     
                   
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


<script type="text/javascript">
    function printHelloWorld() {
      
       // alert(naam.value);
      
        
        txt = "Zijn de volgende gegevens correct? \n \n";
        //txt = txt + naam.value;
        //alert(txt);
        var vak = document.getElementById("vak");
        var titel = document.getElementById("titel");
        var maximum = document.getElementById("maximum");
        var size = document.getElementById("size");
        
        var error = 0;
        
        txt = txt + "Vak: " + vak.value +"\n";
        txt = txt + "Titel: " + titel.value+"\n";
        txt = txt + "Totale punten: " + maximum.value+"\n\n";
      
        for(count = 0; count < size.value; count++) {
               var punt = document.getElementById("punt["+count+"]");
               var naam = document.getElementById("naam["+count+"]");
               var voornaam = document.getElementById("voornaam["+count+"]");
               var studentennummer = document.getElementById("studentennummer["+count+"]");
               
               if(punt.value > parseFloat(maximum.value) || punt.value < 0){  
                    alert(punt.value + ' > ' + parseFloat(maximum.value) );
                    punt.style.backgroundColor = "red";
                    error = 1;
                } 
               
               //txt= txt + punt.value;
               txt = txt+ "Studentennummer " + studentennummer.value + " " + naam.value + " " + voornaam.value +  " heeft " + punt.value +"\n";
        }
        
        //alert(txt);
       if (error != 0){
           txt = "Er is een error, probeer opnnieuw!"
           // Op de pagina blijven om fouten te veranderen
       }
       else if (confirm(txt)) {
            txt = "You pressed OK!";
            // uploaden van de data
            // Naar de normale docenten pagina ga na dat het geupload is. 
            // Melding het is geupload je klikt op oke en dan ga je naar de normale docenten pagina. 
       } else {
            txt = "You pressed Cancel!";
            // Op de pagina blijven voor aanpassingen te doen
       }
       alert(txt);
        
    }
    
</script>


