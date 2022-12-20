<?php

namespace App\Http\Controllers;

use App\Models\port;
use Illuminate\Http\Request;
use App\Http\Requests\updatePort;

class ports extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function show(port $port)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        $page_title = __("names.edit") ." ". __("pages.ports");
        $port = port::latest()->first();
        return view('dashboard.pages.ports.edit',compact('page_title','port'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function update(updatePort $request){

        try{

            $update = port::count();
            if($update > 0){
                $update = port::latest()->first()->update([
                    'url' => $request->url
                    ]);
                }else{
                $update = port::create([
                    'url' => $request->url
                    ]);
            }

           
            if($update){
                return \Redirect::back()->with('success',trans('pages.update_success'));   
            }else{
                return \Redirect::back()->withErrors([trans('pages.update_failed')]);
            }
        }catch (\Exception $e){
            return $e;
            return \Redirect::back()->withErrors([trans('pages.update_failed')]);
        }  

    }
}
