<?php

namespace App\Http\Controllers\Backend\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function showUser($id=null){
       if ($id==""){
        $user=User::get();
        return response()->json(['users'=>$user, 200]);
       }
       else{
        $user=User::find($id);
        return response()->json(['users'=>$user, 200]);
       }
    }


    // public function homeIndex(){
    //    return  User::latest()->get();
    // }

     public function store(Request $request){
    //    return $request->all();
    }

}
