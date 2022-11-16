<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('login');
    }
    function checklogin(Request $request){
         
    }
}
