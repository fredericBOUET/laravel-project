<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
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
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user=User::where('name', $request->username)->first();
        if($user != NULL){
            if(Hash::check($request->password, $user->password)) {
                if( $user->name==$request->username  ){
                    
                    $request->session()->put('key', $user->roles);
                    $request->session()->put('id', $user->id);
                    $session = $request->session()->get('key');
                    return redirect('/');
                }else{
                    return redirect('/login')->withErrors(['name' => 'Votre mot de passe ou votre identifiant est eronné.']);
                }
            }
            else{
                return redirect('/login')->withErrors(['name' => 'Votre mot de passe ou votre identifiant est eronné.']);
            }
        }else{
            return redirect('/login')->withErrors(['name' => 'Votre mot de passe ou votre identifiant est eronné.']);
        }

    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function register(){
        return view('register');
    }

    public function registerUser(request $request){


        $validatedData = $request->validate([
        'username' => 'required|min:3|max:50',
        'email' => 'email',
        'vat_number' => 'max:13',
        'password' => 'required|confirmed|min:6',
          ]);

    $user = User::whereName($request->username)->get();
    $password = Hash::make($request->password);
    if($user == NULL || $user == "[]" || $user == ''){
         User::create(['name' => $request->username, 'email' => $request->email, 'password'=> $password, 'roles'=>'sub']);
         return redirect('/login');
    }else{
        return redirect('/register')->withErrors(['name' => "Le nom d'utilisateur existe déjà."]);
    }
        
    }
}
