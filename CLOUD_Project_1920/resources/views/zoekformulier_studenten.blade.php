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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<h2>Hoverable Dropdown</h2>
<p>Move the mouse over the button to open the dropdown menu.</p>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="/students/klas1">Link 1</a>
    <a href="/students/klas2">Link 2</a>
    <a href="/students/klas3">Link 3</a>
  </div>
</div>

</body>
@stop
