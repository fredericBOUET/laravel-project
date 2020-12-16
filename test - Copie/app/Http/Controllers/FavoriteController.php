<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biere;
use App\Models\User;

class FavoriteController extends Controller
{
    public function testAjax($request) {
   
        $user_id = session()->get('id');
        $user_role = session()->get('key');
        $biere_id = $request;

        if($user_role){
            $user=User::findOrFail($user_id);
            $biere = Biere::findOrFail($biere_id);
            $user->bieres()->toggle($biere_id);
        }
     }

     public function showFavorites(){


            $user_id = session()->get('id');
            $user=User::findOrFail($user_id);
            return view('favoris', compact('user'));
        }

        public static function countFav()
    {
        $user_id = session()->get('id');
        $biereCount=User::findOrFail($user_id)->bieres()->count();
        return $biereCount;
    }
     }


