<?php
namespace App\Http\Controllers\business;
use Auth;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use DB;
class BProfileController extends Controller
{
/**
* Create a new controller instance.
*

*/
public function login2(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    if (Auth::attempt(['email' => $email, 'password' => $password, 'is_affilates' =>1]))
    {
    $user = User::where('id', Auth::user()->id)->first();
    return redirect('/submitlead');       
    }
    else
    {
    return redirect()->back()
    ->with('error','Email-Address And Password Are Wrong.');
    }
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function index()
{
return view('home');
}

public function register(Request $request)
{


$data=$request->all();
// dd($data);
 $user1=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
           
            'b_email' => $data['b_email'],
            'business' => $data['business'],
            'mobile' => $data['mobile'],
            'persons' => $data['persons'],
            'password' => Hash::make($data['password']),
        ]);


  auth()->login($user1);
   $user=Auth::user();
return redirect('/dashboard');

}


}