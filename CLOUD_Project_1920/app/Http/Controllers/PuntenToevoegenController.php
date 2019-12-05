<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Klas;
class PuntenToevoegenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ("deze werkt");
    }

    
    public function klasselect(Request $request)
    {   $waarde = $request->keuzeKlas;
        $klassen =  Klas::all()->pluck('klas');
        // return ("De geselecteerde klas is $waarde ");
        //return Klas::all()->get(2)->klas;
        for ($i = 0; $i < sizeof($klassen);$i++){
         print ("Klas $i: $klassen[$i] <br>");
        }
        print("<br>Je hebt $waarde gekozen");
        print("Dit zijn alle leerlingen die in klas '$waarde' zitten<br><br>");
          
        $studentenNaam = Student::all()->where('klas',$waarde)->pluck('naam');
        $studentenVoornaam = Student::all()->where('klas',$waarde)->pluck('voornaam');
        
        for ($i = 0; $i < sizeof($studentenNaam);$i++){
         print ("$studentenNaam[$i], $studentenVoornaam[$i] <br>");
        }
        
        return;
        //return Klas::find(2)->klas;
    
    }
    
       public function giveStudents(Request $request)
    {   
        $waarde = $request->keuzeKlas;
        $klassen =  Klas::all()->pluck('klas');
        print("Dit zijn alle leerlingen die in klas '$waarde' zitten<br><br>");
          
        $studentenNaam = Student::all()->where('klas',$waarde)->pluck('naam');
        $studentenVoornaam = Student::all()->where('klas',$waarde)->pluck('voornaam');
        
        for ($i = 0; $i < sizeof($studentenNaam);$i++){
         print ("$studentenNaam[$i], $studentenVoornaam[$i] <br>");
        }
        
        $hallo = array($studentenNaam,$studentenVoornaam);
        //return view('ingave_punten',compact($hallo,$goed));
        return view('weergavestudenten',['studentNaam'=>$studentenNaam,'studentVoornaam'=>$studentenVoornaam]);

        //return Klas::find(2)->klas;
    
    }
    
    public function uploadPunten(Request $request)
    {   
       // $min = $request->punten[0];
       // $max = $request->hallo[1];
        $studentNaam = $request->naam;
        $studentVoornaam = $request->voornaam;
        $punten = $request->punten;
        $size = sizeof($request->punten);
        $size1 = sizeof($request->naam);
        $size2 = sizeof($request->voornaam);
        print("De size = $size, $size1, $size2 <br>");
        for ($i = 0; $i < $size;$i++){
            print ("$studentNaam[$i] $studentVoornaam[$i] heeft $punten[$i] behaald <br>");
            //print ("$punten[$i] behaald <br>");
        }
        return "Ontvangen";

        //return Klas::find(2)->klas;
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
