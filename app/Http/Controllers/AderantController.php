<?php

namespace App\Http\Controllers;

use App\aderant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Carbon\Carbon;

class AderantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            
        if($request->ajax()){
            $validatedData = $request->validate([
                'login' => 'required|string|max:50',
                'password' => 'required|string|max:50',
                'nom' => 'required|string|max:50',
                'prenom' => 'required|string|max:50',
                'email' => 'required|email|max:50' ,
                'cin' => 'required|string|max:50',
                'tele' => 'nullable|string|max:50',
                'type_revenus' => 'required|array' , 
                'type_revenus.*' => 'required|string|max:50' , 
                'file' => 'required|array' , 
                'file.*' => 'required|image' , 
            ]);

            foreach ($request->file('file') as $key => $value) {
                $date = Carbon::now()->toDateString().'_'.Carbon::now()->hour.';'.Carbon::now()->minute.';'.Carbon::now()->second.'H' ; 
                $path = Storage::putFileAs(
                        'Adhérants/'.$date.'_'.$request->input('nom').'.'.$request->input('prenom') , 
                        $value , 
                        $key.'_'.$date.'.'.$value->getClientOriginalExtension() 
                    );

        }
                $aderant = new aderant($validatedData);
                foreach ($request->input("type_revenus") as $key => $value) {
                    $aderant[$value] = true ; 
                }
                $dirpath = dirname(Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix().''.$path)  ;
                $aderant["path"] = $dirpath ; 
                $aderant->save() ; 





        return response()->json([
            "message" => "Information Bien Reçu" , 
            "flag" => true , 
        ]) ;
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aderant  $aderant
     * @return \Illuminate\Http\Response
     */
    public function show(aderant $aderant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aderant  $aderant
     * @return \Illuminate\Http\Response
     */
    public function edit(aderant $aderant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aderant  $aderant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aderant $aderant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aderant  $aderant
     * @return \Illuminate\Http\Response
     */
    public function destroy(aderant $aderant)
    {
        //
    }
}
