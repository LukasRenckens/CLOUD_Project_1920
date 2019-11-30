<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\SOAP\HelloRequest;
use App\SOAP\GetDagMenuRequest;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Goeie ball,..... teelbal ofwa";
        //return Student::all();
       // string voornaam = "Niels";
        //return Student::where(voornaam, 'Niels')->get();
        //return Student::find(3)->naam;
        
        //return Laptop::find(2)->merk->laptops;
        
//        $oSoapWrapper = new SoapWrapper();
//        $oSoapWrapper->add('WebService', function ($oService){
//            $oService
//                ->wsdl('http://localhost:65266/WebService.asmx?WSDL')
//                ->trace(true)
//                ->classmap([
//                    HelloRequest::class
//                ]);
//        });
//        $Response = $oSoapWrapper->call('WebService.Hello',[
//                new HelloRequest(1)
//            ]);
//        $h = ($Response->HelloResult);
//        
//        return $h;
        
        $oSoapWrapper = new SoapWrapper();
        $oSoapWrapper->add('WebService', function ($oService){
            $oService
                ->wsdl('http://localhost:65266/WebService.asmx?WSDL')
                ->trace(true)
                ->classmap([
                GetDagMenuRequest::class
                ]);
        });
        $Response = $oSoapWrapper->call('WebService.GetDagMenu',[
                new GetDagMenuRequest()
            ]);
        $result = ($Response->GetDagMenuResult);
        
        echo json_encode($result);
    }
    
    
    public function search()
    {
        return view("zoekformulier");
        //
    }

    
    public function found(Request $request)
    {
        // synchroon service oproepen = website ophalen
        $mi = $request->minPrijs;
        $ma = $request->maxPrijs;
       
        return "JA hallo het werkt eindelijk";
    }
    
    public function find_studentennummer(Request $request)
    {
        // synchroon service oproepen = website ophalen
        $naam = $request->naamS;
        $voornaam = $request->voornaamS;
        try {
          $id = Student::where('voornaam', '=', $voornaam)->id;
        //return Laptop::all()->where('prijs', '<', 499);
        //->orWhere('prijs', 1499);
        }   
        catch (\Exception $e) {
            print("naam: $naam, voornaam: $voornaam ");
          return "Deze student heeft geen studentennummer";
        } 
       
        return "Het studentennummer $id van $voornaam $naam:";
    }
     public function  find_naam_voornaam(Request $request)
    {
        // synchroon service oproepen = website ophalen
        $studentennummer = $request->studentennummerS;
        try {
             $naam = Student::find($studentennummer)->naam;
             $voornaam = Student::find($studentennummer)->voornaam;
        }   
        catch (\Exception $e) {
           // $this->command->error("SQL Error: " . $e->getMessage() . "\n");
            return "Er is geen student met het studentennummer $studentennummer";
        }     
        return "De naam met het studenten nummer  '$studentennummer' is '$naam $voornaam'";
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
