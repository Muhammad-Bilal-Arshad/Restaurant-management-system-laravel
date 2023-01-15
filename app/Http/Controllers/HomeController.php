<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\food;
class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        return view ("home",compact("data"));

    }
    public function redirects(){
        $data = food::all();
        $userype = Auth::user()->usertype;
        if($userype=='1'){
            return view('admin.adminhome');
        }
        else if($userype=='2'){
            return view('order.orderhome');
        }
        else if($userype=='3'){
            return view('Kitchen.kitchenhome');
        }
        else{
            return view('home',compact('data'));
        }

    }

}
