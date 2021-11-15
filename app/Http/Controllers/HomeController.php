<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\Cheifs;

class HomeController extends Controller
{

    function index(){
        $data =Food::all();
        $chiefs=Cheifs::all();
        return view('home', compact('data','chiefs'));
    }

    function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype==1){
            return view('admin.adminhome');
        }
        else{
            $data =Food::all();
            $chiefs=Cheifs::all();
            return view('home',compact('data','chiefs') );
        }
    }

}
