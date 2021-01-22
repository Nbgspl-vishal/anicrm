<?php



namespace App\Http\Controllers\business;





use Auth;

use Illuminate\Http\Request;

use Twilio\Rest\Client;

use Twilio\Jwt\ClientToken;

use App\Models\User;

use Illuminate\Support\Facades\Hash;



use DB;



class HomeController extends Controller

{





   










public function calendar(){

	return view('calendar');

}

public function allcustomer(){

	$active=DB::table('customer')->where('status','1')->get();
	$suspended=DB::table('customer')->where('status','0')->get();
	$all=DB::table('customer')->get();

	return view('allcustomer',compact('active','suspended','all'));

}

public function suppliers(){

	return view('suppliers');

}

public function allsites(){

	return view('allsites');

}

public function partslibrary(){

	return view('partslibrary');

}

public function alljobs(){

	return view('alljobs');

}

public function certificate_forms(){

	return view('certificate-forms');

}

public function part_cost(){

	return view('part-cost');

}

public function allquotes(){

	return view('allquotes');

}

public function invoices(){

	return view('invoices');

}

public function payment(){

	return view('payment');

}

public function purchaseorder(){

	return view('purchaseorder');

}

public function engineer(){

	return view('engineer');

}

public function reports(){

	return view('reports');

}

public function setting(){

	return view('setting');

}
public function userprofile(){
$user=Auth::user();
// dd($user);


	return view('businessadmin.userprofile');

}

public function getprofile(Request $request){
	$data=$request->all();
dd($data);
     	 if(!empty($data['profile_image'])){
            $request->validate([
                'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
          $imageName = time().'.'.$data['profile_image']->extension();
            $data['profile_image']->move(public_path('assets/user'), $imageName);

            $data['profile_image'] = $imageName;
          }
     


	$v = array('name' => $data['name'],'email' => $data['email'], 'mobile' => $data['mobile'],'house_number' => $data['house_number'],'area' => $data['area'],'country' => $data['country'],'city' => $data['city'],'telephone'=>$data['telephone'],'zip_code' => $data['zip_code'],'profile_image'=>$data['profile_image']);
	// dd($v);
	$id=Auth::user()->id;
	$id1=DB::table('users')->where('id',$id)->update($v);
// dd($id1);
	return redirect()->back();


}
public function userdetail(){

	return view('user-detail');

}

public function addcustomer(){

	return view('addcustomer');

}

public function addsuppliers(){

	return view('addsuppliers');

}




}

