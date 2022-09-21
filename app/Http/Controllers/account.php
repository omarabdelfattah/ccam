<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

use App\Models\User;
use App\Http\Requests\loginRequest;
use App\Http\Requests\updatePassword; 
use App\Http\Requests\updateUser; 
use App\Mail\AdminResetPassword;
use DB;
use Carbon\Carbon;
use Mail;
class account extends Controller
{
    function index(){
        $page_title = __("pages.login");
        return view('dashboard.pages.login',compact('page_title'));
    }

    function login(loginRequest $request){

            if( auth()->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]) ){
                return redirect()->route('dashboard');
            }elseif( auth()->attempt(['email'=>$request->input('username'),'password'=>$request->input('password')]) ){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->withErrors(['login_failed' => 'auth.failed']);
            }
        
    }

    function logout(Request $request){

        // if(auth()->guard()->check()){
        //     Auth::guard()->logout();

        //     $request->session()->invalidate();

        //     $request->session()->regenerateToken();

        //     return redirect(Route('login'));
        // }

        
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(Route('login'));
    
    }

    public function edit(){
        $page_title = __("names.edit") ." ". __("pages.profile");
        return view('dashboard.pages.account.edit',compact('page_title'));
    }

    public function update(updateUser $request){

        try{
            $user = auth()->user();
            if($request->has('password') && !empty( $request->password ) ){
                $update = User::where('id' , auth()->user()->id)->update([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    ]);
            }else{
                $update = User::where('id' , auth()->user()->id)->update($request->only(['name','username','email']));
            }
            if($update){
                return \Redirect::back()->with('success',trans('pages.update_success'));   
            }else{
                return \Redirect::back()->withErrors([trans('pages.update_failed')]);
            }
        }catch (\Exception $e){
            return \Redirect::back()->withErrors([trans('pages.update_failed')]);
        }  

    }

}