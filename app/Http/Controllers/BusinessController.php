<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use DB;
use Artisan;

class BusinessController extends Controller
{



  public function __construct()



    {



        $this->middleware('auth');



    }


     
    public function index()
    {
         $active=DB::table('users')->orwhere('status','1')->orwhere('status','3')->get();
         $inactive=DB::table('users')->where('status','0')->get();
         $all=DB::table('users')->where('status','!=','2')->get();

        return view('superadmin/bussiness-admin',compact('active','inactive','all'));
        
    }

      public function addbussiness()
    {
        return view('superadmin/add-bussiness-admin');
        
    }
       public function package()
    {
        return view('superadmin/pricing');
        
    }
     
    public function getadmin(Request $request)
    {

             $validator = \Validator::make($request->all(), [
            'name'  => 'required',
            'email'  => 'required|unique:users|email',
            'mobile'  => 'required',
            'business_name'  => 'required',
            'business'  => 'required',
            'worker'  => 'required',
            'area'  => 'required',
            'zip_code'  => 'required',
            'country'  => 'required',
            'password'  => 'required',       
            'subdomain'  => 'required',  
             'default'=> 'required'  ,  
            
                   ]);
         if ($validator->fails()) 
        {
        return redirect()->back()->withErrors($validator)->withInput();
            
        }

        $data=$request->all();
        // dd($data);
           
        $v = array('business_name' =>$data['business_name'] , 'business' =>$data['business'],'worker' =>$data['worker'],'name' =>$data['name'],'mobile' =>$data['mobile'],'area' =>$data['area'],'city' =>$data['city'],'country' =>$data['country'],'zip_code' =>$data['zip_code'],'email' =>$data['email'],'password' =>Hash::make($data['password']),'status'=>'1','subdomain'=>$data['subdomain']);


        if (!empty($data)) {

         try{ 

           



            $dbdubdomain = str_replace('-','',$request['subdomain']);
               
                $new_db = "visahl_".$dbdubdomain;   
                // dd($new_db);        
          
           DB::statement("CREATE DATABASE $new_db");        
                 config(['database.default' => 'mysql2']);
                 config(['database.connections.mysql2.database' => $new_db]);
                 DB::purge('mysql');
                           Artisan::call('migrate', [
                '--path'     => "database/migrations"
                ]);
                 config(['database.default' => 'mysql']);
                    DB::purge('mysql');
                $idd=DB::table('users')->insertGetId($v);  
           
              return $idd;
                $request->session()->flash('success', 'Upload successful!');
            }catch(\Exception $e){
                $request->session()->flash('error', $e);    
                return redirect()->back();
            }
            return redirect()->back();
        }else{
            $request->session()->flash('error', 'Somthing went wrong!');    
            return redirect()->back();
        }
         





       
        
        
    }
 


 public function editadmin(Request $request, $id)
    {

             $validator = \Validator::make($request->all(), [
            'name'  => 'required',
            'email'  => 'required',
            'mobile'  => 'required',
            'business_name'  => 'required',
            'business'  => 'required',
            'worker'  => 'required',
            'area'  => 'required',
            'zip_code'  => 'required',
            'country'  => 'required',
               
            'subdomain'  => 'required',       
            
                   ]);
         if ($validator->fails()) 
        {
        return redirect()->back()->withErrors($validator)->withInput();
            
        }

        $data=$request->all();
           
        $v = array('business_name' =>$data['business_name'] , 'business' =>$data['business'],'worker' =>$data['worker'],'name' =>$data['name'],'mobile' =>$data['mobile'],'area' =>$data['area'],'city' =>$data['city'],'country' =>$data['country'],'zip_code' =>$data['zip_code'],'email' =>$data['email'],'status'=>'1','subdomain'=>$data['subdomain']);

        if (!empty($data)) {

            try{
            DB::table('users')->where('id',$id)->update($v);
          

         
                $request->session()->flash('success', 'Update successful!');
            }catch(\Exception $e){
                $request->session()->flash('error', $e);    
                return redirect()->back();
            }
            return redirect()->back();
        }else{
            $request->session()->flash('error', 'Somthing went wrong!');    
            return redirect()->back();
        }
         





       
        
        
    }

     public function permission($id)
    {

        $pre=DB::table('permission')->where('user_id',$id)->first();


        if ($pre->permisson=='default') {
            $value=$pre->permisson;
        }
        else{
              $pre1=$pre->permisson;
        // dd($pre1);
        $value=unserialize($pre1);
        // dd($value);

        }

      
        // dd($value);
       
       
        return view('superadmin/user-permission',compact('value'));
        
    }

 public function block($id)
    {
        // dd($id);
        DB::table('users')->where('id',$id)->update(['status'=>'3']);
        return redirect()->back();
        
    } 
    public function unblock($id)
    {
        // dd($id);
        DB::table('users')->where('id',$id)->update(['status'=>'1']);
        return redirect()->back();
        
    } 
    


       public function admin_profile()
    {
        return view('superadmin/bussiness-admin-profile');
        
    }


       public function edit_profile($id)
    {

        $admin=  DB::table('users')->where('id',$id)->first();
        return view('superadmin/edit-bussines-admin',compact('admin'));
        
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
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back();
        
    }
}
