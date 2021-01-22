<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TermsController extends Controller
{
  public function __construct()



    {



        $this->middleware('auth');



    }




    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $policy= DB::table('terms')->first();
             if (!empty($policy)) {
                $text=$policy->text;
                return view('superadmin.edit-terms-conditions',compact('text'));
             }
        
   




      return view('superadmin/terms-condition');
        
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
        $data=$request->all();
        $v = array('text' =>$data['text'] );
        // $data = unset($data['_token']);
        DB::table('terms')->insert($v);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
          $data=$request->all();
        $v = array('text' =>$data['text'] );
        // $data = unset($data['_token']);
       DB::table('terms')->delete();
        DB::table('terms')->insert();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
          DB::table('terms')->delete();
        return redirect()->back();
    }
}
