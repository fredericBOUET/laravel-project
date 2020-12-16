<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biere;
use App\Models\User;

class AdminBiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bieres = Biere::all();
        $users= User::whereRoles('sub')->get();
        return view('admin.index', compact('bieres', 'users') );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'brasserie'=>'required',
            'description'=>'required',
            'type'=>'required'
        ]);
        Biere::create(['nom' => $request->nom, 'brasserie' => $request->brasserie, 'description'=> $request->description, 'type'=> $request->type, 'image'=>$request->type.".jpg"]);
        return redirect('/admin');
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
        return view('admin.show', compact('biere') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biere =Biere::findOrFail($id);
        return view('admin.edit', compact('biere'));
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
        $request->validate([
            'nom'=>'required',
            'brasserie'=>'required',
            'type'=>'required'
        ]);

        $biere=Biere::findOrFail($id);
        $biere->update(['nom' => $request->nom, 'brasserie' => $request->brasserie, 'description'=> $request->description, 'type'=> $request->type, 'image'=>$request->type.".jpg"]);
        return redirect('/admin');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biere=Biere::findOrFail($id);
        $biere->delete();
        return redirect('/admin');
    }

        /**
     * Show all recently deleted items.
     *
     * @return \Illuminate\Http\Response
     */
    public function corbeille()
    {
       $onlySoftDeleted = Biere::onlyTrashed()->get();
       return view('admin.corbeille', compact('onlySoftDeleted') );
    }


    public function cleanDeleted(Request $request){
        $deletedCheckbox = $request->input('delete');
        foreach($deletedCheckbox as $deletedItem){
            $biere = Biere::onlyTrashed()->whereId($deletedItem)->first();
            $biere-> forceDelete();
        }
        return redirect('corbeille');
    }

    public static function countDeleted()
    {
        $bieresCount = Biere::onlyTrashed()->count();  
        return $bieresCount;
    }

    public function deleteUser($id){
        $user=User::findOrFail($id);
        $user->forceDelete();
        return redirect('/admin');
    }
}
