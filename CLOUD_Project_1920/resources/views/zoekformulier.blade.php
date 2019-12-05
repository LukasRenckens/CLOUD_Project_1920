@extends('master')

@section('titel','zoek students')
@section('eigen_inhoud')
<form action="/students/found" method ="post"> <!-- of found -->
    @csrf
    <table> 
        <tr>
            <td> <label for="minPrijs">Min prijs</label></td>
            <td> <input type='number' name='minPrijs' value = '500'/> </td>
        </tr>
        
        <tr>
            <td> <label for="maxPrijs">max prijs</label> </td>
            <td> <input type='number' name='maxPrijs' value = '750'/></td>
        </tr>
        <tr>
            <td></td>
            <td> <input type='submit' value = 'Zoek'/></td>
        </tr>
        
    </table>
    
    
    
   
    <br/>
   
    
    <br/>
   
</form>
@stop
