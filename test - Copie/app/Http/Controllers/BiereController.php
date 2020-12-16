<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biere;
use App\Models\User;

class BiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $bieres = Biere::all();
        if (session()->get('id')==''){
            return view('index', compact('bieres'));
        }else{
            $user_id = session()->get('id');
            $user = User::findOrFail($user_id);
             //return $user->bieres()->get();

          $arrayID = array();
            foreach($user->bieres as $biere){
                array_push($arrayID, $biere->id);
            }
            return view('index', compact('bieres','arrayID'));
        }
        
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "im the method that create stuff";
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
        $biere = Biere::findOrFail($id);
        return view('biere', compact('biere') );
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
