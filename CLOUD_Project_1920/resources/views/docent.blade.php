@extends('index')

@section('eigen_inhoud')
    <a href="\students\search">
                    <button type="button">Studenten</button>
                    </a>
                    <a href="\docent">
                        <button type="button">Docenten</button>
                    </a>
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


@endsection
@yield('test')
@section('extra_inhoud')

<p></p>
            <div class="card">
                <div class="card-header">Ingeven van punten in een klas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                 

                    <form action="/punten/klasselect" method="post">
                        @csrf
                        <select name="keuzeKlas">
                            <option value="EA-ICT Master">EA-ICT Master</option>
                            <option value="EA-ICT Bachelor">EA-ICT Bachelor</option>
                            <option value="EM Master">EM Master</option>
                        </select>
                    <input type="submit" value="Get Selected Values" />
                    </form>
                </div>
            </div>
@endsection



        