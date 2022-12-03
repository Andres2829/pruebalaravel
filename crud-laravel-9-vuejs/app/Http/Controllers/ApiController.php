<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

     //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$apis = json_decode(file_get_contents("https://rickandmortyapi.com/api/character"),true);
        //print_r($apis);

        $apis = collect(Http::get('https://rickandmortyapi.com/api/character/')->json()['results']);
        return Inertia::render(
            'Apis/Index',
            [
                'apis' => $apis
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request  $request, $id)
    {
       
       
        
        $apis = collect(Http::get('https://rickandmortyapi.com/api/character/'.$request->id=$id)->json());
        return Inertia::render(
            'Apis/Detalle',
            [
               'apis' => $apis
            ]
         );
    }


}
