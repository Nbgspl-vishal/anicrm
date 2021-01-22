<?php

namespace App\Http\Controllers\business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;



use Twilio\Rest\Client;

use Twilio\Jwt\ClientToken;

use App\Models\User;

use Illuminate\Support\Facades\Hash;



use DB;

class BussinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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







   










public function calendar(){

    return view('businessadmin/calendar');

}

public function allcustomer(){

    $active=DB::table('customer')->where('status','1')->get();
    $suspended=DB::table('customer')->where('status','0')->get();
    $all=DB::table('customer')->get();

    return view('businessadmin/allcustomer',compact('active','suspended','all'));

}

public function suppliers(){

    return view('businessadmin/suppliers');

}

public function allsites(){

    return view('businessadmin/allsites');

}

public function partslibrary(){

    return view('businessadmin/partslibrary');

}

public function alljobs(){

    return view('businessadmin/alljobs');

}

public function certificate_forms(){

    return view('businessadmin/certificate-forms');

}

public function part_cost(){

    return view('businessadmin/part-cost');

}

public function allquotes(){

    return view('businessadmin/allquotes');

}

public function invoices(){

    return view('businessadmin/invoices');

}

public function payment(){

    return view('businessadmin/payment');

}

public function purchaseorder(){

    return view('businessadmin/purchaseorder');

}

public function engineer(){

    return view('businessadmin/engineer');

}

public function reports(){

    return view('businessadmin/reports');

}

public function setting(){

    return view('businessadmin/setting');

}
public function userprofile(){
$user=Auth::user();
// dd($user);


    return view('businessadmin.userprofile');

}

public function getprofile(Request $request){
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
           else{
            $data['profile_image'] = '0';

           }

          $v = array('name' => $data['name'], 'mobile' => $data['mobile'],'company_name' => $data['company_name'],'area' => $data['area'],'country' => $data['country'],'city' => $data['city'],'telephone'=>$data['telephone'],'zip_code' => $data['zip_code'],'profile_image'=>$data['profile_image']);
      DB::table('users')->where('id',$id)->update($v); 
      return redirect()->back();



}
public function userdetail(){

    return view('businessadmin/user-detail');

}

public function addcustomer(){

    return view('businessadmin/addcustomer');

}

public function addsuppliers(){

    return view('businessadmin/addsuppliers');

}

}
