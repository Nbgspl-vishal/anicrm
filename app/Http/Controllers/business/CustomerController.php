<?php

namespace App\Http\Controllers\business;

use Auth;

use Illuminate\Http\Request;

use Twilio\Rest\Client;

use Twilio\Jwt\ClientToken;

use App\Models\User;

use Illuminate\Support\Facades\Hash;



use DB;

class CustomerController extends Controller

{



    public function search(Request $request)
{
if($request->ajax())
{
$output="";
$zipcode=DB::table('us')->where('zipcode','LIKE','%'.$request->search."%")->get();


return Response($zipcode);
}

}
 public function getdata(Request $request){
 	$data=$request->all();
 

	$user= Auth::user();
   	 $validator = \Validator::make($request->all(), [
           
  "customer_name" => "required",
  "reference_number" => "required",
  "tag" => "required",
  "address" => "required",
  "city" => "required",
  "country" => "required",
  "post_code" => "required",
  "telephone_number" => "required",
  "customer_type" => "required",
  "add_customer" => "",
  "first_name" => "required",
  "last_name" => "required",
  "telephone" => "required",
  "email" => "required",
  "job_position" => "required",
  "i_first_name" => "required",
  "i_last_name" => "required",
  "i_telephone" => "required",
  "i_email" => "required",
  "i_job_position" => "required"
                   ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

$c = array('customer_name' => $data['customer_name'],'reference_number' => $data['reference_number'],'tag' => $data['tag'],'address' => $data['address'],'city' => $data['city'],'country' => $data['country'],'post_code' => $data['post_code'],'telephone_number' => $data['telephone_number'],'customer_type' => $data['customer_type'],'add_customer' => $data['add_customer']);

if (!empty($data)) {


  $id=  DB::table('customer')->insertGetId($c);
    $cc = array('first_name' => $data['first_name'],'last_name' => $data['last_name'],'email' => $data['email'],'telephone' => $data['telephone'],'job_position' => $data['job_position'],'customer_id'=>$id );


    DB::table('customer_contact')->insertGetId($cc);
    $ci = array('first_name' =>$data['i_first_name'] ,'last_name' =>$data['i_last_name'],'email' =>$data['i_email'],'telephone' =>$data['i_telephone'],'job_position' =>$data['i_job_position'],'customer_id'=>$id  );
    DB::table('customer_invoice')->insertGetId($ci);
$request->session()->flash('success', 'Customer Added Successfully');
	 return redirect()->back();
}

 }




public function creport($id){
	$data=DB::table('customer')->where('id',$id)->first();
	$main=DB::table('customer_contact')->where('id',$id)->first();
	$invoice=DB::table('customer_invoice')->where('id',$id)->first();
	return view('admin/customer-report',compact('data','main','invoice'));

}
public function notes($id,Request $request){
	$data=$request->all();
  DB::table('customer')->where('id',$id)->update(['notes'=>$data['notes']]);
	$data=DB::table('customer')->where('id',$id)->first();
	$main=DB::table('customer_contact')->where('id',$id)->first();
	$invoice=DB::table('customer_invoice')->where('id',$id)->first();
	return view('admin/customer-report',compact('data','main','invoice'));

}
}