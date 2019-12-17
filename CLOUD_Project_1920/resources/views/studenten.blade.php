@extends('index')

@section('eigen_inhoud')
    <a href="\students\search">
                    <button type="button">Studenten</button>
                    </a>
                    <a href="\docent">
                        <button type="button">Docenten</button>
                    </a>
                    Ingelogd als een student krijg je uiteraard toegang
                   
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

@endsection




        