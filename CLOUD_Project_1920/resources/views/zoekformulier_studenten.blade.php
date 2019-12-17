@extends('master')

@section('titel','zoek students')
@section('eigen_inhoud')

<html>
        <hr/>
        <p>Start print studenten</p>
</html>


<html>
        <p>Einde print studenten</p>
        
</html>


<html>
        <p>Zoek het studenten nummer [id] door de naam en voornaam van de student in te geven</p>
</html>

<form action="/students/find_studentennummer" method ="post"> <!-- of found -->
    @csrf
    <table> 
        <tr>
            <td> <label for="voornaamS">Voornaam</label></td>
            <td> <input type='text' name='voornaamS' value = 'voornaam'/> </td>
        </tr>
        
        <tr>
            <td> <label for="naamS">Naam</label> </td>
            <td> <input type='text' name='naamS' value = 'naam'/></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type='submit' value = 'Zoek studenten nummer'/></td>
        </tr>
    </table>
    <br/>
    <br/>
</form>


<html><p>test send select option</p></html>

<form action="/punten/klasselect" method="post">
     @csrf
    <td> <label for="naamS">Naam</label> </td>
    <td> <input type='text' name='naamS' value = 'naam'/></td>
    <select name="keuzeKlas">
        <option value="EA-ICT Master">EA-ICT Master</option>
        <option value="EA-ICT Bachelor">EA-ICT Bachelor</option>
        <option value="EM Master">EM Master</option>
    </select>
<input type="submit" value="Get Selected Values" />
</form>

<html><p>Zoek het studenten nummer [id] door de naam en voornaam van de student in te geven</p>
    <h1>Eigen service oproepen</h1></html>
<form action="/students/find_naam_voornaam" method ="post">
    @csrf
    <!--   commentaar -->
    <table>
        <tr>
            <td>    
                <label for="studentennummerS">Studenten nummer</label>
            </td> 
            <td>    
                <input type='text' name='studentennummerS' value='1' />
            </td> 
            <td>    
                <input type='submit' value="Zoek"/>
            </td> 
        </tr>

    </table>  
</form>
<hr/>


<html><p>Ingeven van de punten van alle studenten</p>
    <h1>Leerkracht kan punten van alle studenten ingeven</h1></html>
<form action="/students/find_naam_voornaam" method ="post">
    @csrf
    <!--   commentaar -->
    <table>
        <tr>
            <td>    
                <label for="studentennummerS">Studenten nummer</label>
            </td> 
            <td>    
                <input type='number' name='studentennummerS' value='1' />
            </td> 
            <td>    
                <input type='submit' value="Zoek"/>
            </td> 
        </tr>

    </table>  
</form>