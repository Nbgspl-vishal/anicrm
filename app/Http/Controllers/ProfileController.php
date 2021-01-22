<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;


class ProfileController extends Controller
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



        return view('superadmin/userprofile');
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
    public function update(Request $request)
    {
        
        $data=$request->all();
        // dd($data);
 
      $id=Auth::user()->id;

      if(!empty($data['profile_image'])){
            $request->validate([
                'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
          $imageName = time().'.'.$data['profile_image']->extension();
            $data['profile_image']->move(public_path('assets/user'), $imageName);

            $data['profile_image'] = $imageName;
          }
          $v = array('name' => $data['name'], 'mobile' => $data['mobile'],'company_name' => $data['company_name'],'area' => $data['area'],'country' => $data['country'],'city' => $data['city'],'telephone'=>$data['telephone'],'zip_code' => $data['zip_code'],'profile_image'=>$data['profile_image']);
      DB::table('users')->where('id',$id)->update($v); 
      return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
