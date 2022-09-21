<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;

class home extends Controller
{
    public function index(){
        $page_title = __("titles.home");
        return view('dashboard.pages.home',compact('page_title'));
    }
    public function change_language($lang){
       $user = auth()->user();
       
       if($user){
        $user->lang_code = $lang ;
        $user->save();
       }
        App::setLocale($lang);
        
        session()->put("lang_code",$lang);
        return redirect()->back();
    }
}
