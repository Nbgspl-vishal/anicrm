<?php

namespace App\Http\Controllers\business;

use Illuminate\Http\Request;
use DB;
use Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('businessadmin.suppliers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businessadmin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                "supplier_name" => "bail|required|max:40",
                "reference_number" => "bail|required|max:40|unique:suppliers",
                "tags" => "bail|required|array|min:1",
                "address" => "bail|required|max:100",
                "city" => "bail|required|max:20",
                "country" => "bail|required|max:20",
                "post_code" => "bail|required|max:6",
                "telephone_number" => "bail|required|max:12",
                "supplier_type" => "bail|required",
                "first_name" => "bail|required|max:40",
                "last_name" => "bail|required|max:40",
                "telephone" => "bail|required|max:12",
                "email" => "bail|required|email|max:40",
                "job_position" => "bail|required|max:40",
                "i_first_name" => "bail|required|max:40",
                "i_last_name" => "bail|required|max:40",
                "i_telephone" => "bail|required|max:12",
                "i_email" => "bail|required|email|max:40",
                "i_job_position" => "bail|required|max:40"
            ]
        );
        try{
            DB::transaction(function ()use($data) {
                $supplier = array('supplier_name' => $data['supplier_name'],'reference_number' => $data['reference_number'],'tags' => implode("," , $data['tags']),'address' => $data['address'],'city' => $data['city'],'country' => $data['country'],'post_code' => $data['post_code'],'telephone_number' => $data['telephone_number'],'supplier_type' => $data['supplier_type']);
                $supplier_id =  DB::table('suppliers')->insertGetId($supplier);

                $supplier_contact = array('first_name' => $data['first_name'],'last_name' => $data['last_name'],'email' => $data['email'],'telephone' => $data['telephone'],'job_position' => $data['job_position'],'supplier_id'=>$supplier_id );
                $supplier_invoice_contact = array('first_name' =>$data['i_first_name'] ,'last_name' =>$data['i_last_name'],'email' =>$data['i_email'],'telephone' =>$data['i_telephone'],'job_position' =>$data['i_job_position'],'supplier_id'=>$supplier_id);
                DB::table('supplier_contact')->insert($supplier_contact);
                DB::table('supplier_invoice_contact')->insert($supplier_invoice_contact);
            });

            return redirect()->route('businessadmin.suppliers.index')->withSuccess('Supplier created successfully.');
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return redirect()->route('businessadmin.suppliers.index')->withErrors("Something went wrong.");
        }
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
        $supplier = DB::table('suppliers')->where('id' , $id)->first();
        $supplier_contact = DB::table('supplier_contact')->where('supplier_id' , $id)->first();
        $supplier_invoice_contact = DB::table('supplier_invoice_contact')->where('supplier_id' , $id)->first();
        if(empty($supplier) || empty($supplier_contact) || empty($supplier_invoice_contact)){
            return redirect()->route('businessadmin.suppliers.index')->withErrors("Supplier data missing.");
        }
        return view('businessadmin.suppliers.edit' , compact('supplier' , 'supplier_contact' , 'supplier_invoice_contact'));
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
        $data = $request->validate(
            [
                "supplier_name" => "bail|required|max:40",
                "reference_number" => "bail|required|max:40|unique:suppliers,reference_number,".$id.",id",
                "tags" => "bail|required|array|min:1",
                "address" => "bail|required|max:100",
                "city" => "bail|required|max:20",
                "country" => "bail|required|max:20",
                "post_code" => "bail|required|max:6",
                "telephone_number" => "bail|required|max:12",
                "supplier_type" => "bail|required",
                "first_name" => "bail|required|max:40",
                "last_name" => "bail|required|max:40",
                "telephone" => "bail|required|max:12",
                "email" => "bail|required|email|max:40",
                "job_position" => "bail|required|max:40",
                "i_first_name" => "bail|required|max:40",
                "i_last_name" => "bail|required|max:40",
                "i_telephone" => "bail|required|max:12",
                "i_email" => "bail|required|email|max:40",
                "i_job_position" => "bail|required|max:40"
            ]
        );
        try{
            $supplier = DB::table('suppliers')->where('id' , $id)->first();
            if(empty($supplier)){
                return redirect()->route('businessadmin.suppliers.index')->withErrors("Supplier not found.");
            }

            $supplier = array('supplier_name' => $data['supplier_name'],'reference_number' => $data['reference_number'],'tags' => implode("," , $data['tags']),'address' => $data['address'],'city' => $data['city'],'country' => $data['country'],'post_code' => $data['post_code'],'telephone_number' => $data['telephone_number'],'supplier_type' => $data['supplier_type']);
            $supplier_contact = array('first_name' => $data['first_name'],'last_name' => $data['last_name'],'email' => $data['email'],'telephone' => $data['telephone'],'job_position' => $data['job_position']);
            $supplier_invoice_contact = array('first_name' =>$data['i_first_name'] ,'last_name' =>$data['i_last_name'],'email' =>$data['i_email'],'telephone' =>$data['i_telephone'],'job_position' =>$data['i_job_position']);

            DB::table('suppliers')->where('id' , $id)->update($supplier);
            DB::table('supplier_contact')->where('supplier_id' , $id)->update($supplier_contact);
            DB::table('supplier_invoice_contact')->where('supplier_id' , $id)->update($supplier_invoice_contact);
            return redirect()->route('businessadmin.suppliers.index')->withSuccess('Supplier updated successfully.');
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return redirect()->route('businessadmin.suppliers.index')->withErrors("Something went wrong.");
        }
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

    public function suppliers(Request $request){
        try{
            $where = [];
            if($request->list_type == "active-supplier"){
                $where = ["status"=>"1"];
            }elseif($request->list_type == "suspended-supplier"){
                $where = ["status"=>"0"];
            }
            $suppliers = DB::table('suppliers')
            ->where($where)
            ->where(function($q) use ($request) {
                if($request->tag != "" && $request->keyword != ""){
                     $q->where('tags', 'LIKE', '%' . $request->tag . '%')
                     ->where(function($q2) use($request) {
                         $q2->where('supplier_name', 'LIKE', '%' . $request->keyword . '%')
                         ->orWhere('reference_number', 'LIKE', '%' . $request->keyword . '%')
                         ->orWhere('address', 'LIKE', '%' . $request->keyword . '%')
                         ->orWhere('post_code', 'LIKE', '%' . $request->keyword . '%');
                     });
                }elseif($request->keyword != ""){
                     $q->where('supplier_name', 'LIKE', '%' . $request->keyword . '%')
                     ->orWhere('reference_number', 'LIKE', '%' . $request->keyword . '%')
                     ->orWhere('address', 'LIKE', '%' . $request->keyword . '%')
                     ->orWhere('post_code', 'LIKE', '%' . $request->keyword . '%');
                }elseif($request->tag != ""){
                    $q->where('tags', 'LIKE', '%' . $request->tag . '%');
                }
            })
            ->paginate(10);
            $links = (string) $suppliers->onEachSide(1)->links('pagination::bootstrap-4');
            $suppliers->transform(function($item , $key){
                $item->edit_url = route('businessadmin.suppliers.edit' , $item->id);
                return $item;
            });
            $data = ["data"=>$suppliers , "pagelinks"=>$links];
            return response(["status"=>true , "message"=>"Suppliers fetched successfully." , "data"=>$data] , 200);
        }catch(\Exception $e){
            return response(["status"=>false , "message"=>"Invaid data passed." , "data"=>[]] , 400);
        }

       
    }

    public function importSupplier(Request $request){
        try{
            $validatedData = Validator::make($request->all() , [
                            'file'         => 'bail|required|file|mimes:csv,txt',
                            ]);
            if($validatedData->fails()){
                return response(["status" => false , "message" => $validatedData->errors()->first() , "data"=>null], 200);
            }
            $fileName = time().'.'.$request->file('file')->getClientOriginalExtension();
            request()->file('file')->move(storage_path("app/public/business/uploads"), $fileName);
            $file = storage_path("app/public/business/uploads")."/".$fileName;
            $header = null;
            $data = array();
            $acceptedHeaders=["supplier_name","reference_number","tags","address","city","country","post_code","telephone_number","supplier_type","first_name","last_name","telephone","email","job_position","i_first_name","i_last_name","i_telephone","i_email","i_job_position"];
            if (($handle = fopen($file, 'r')) !== false){
                $total_rows = count(file($file))-1;
                if($total_rows > 100){
                    return response(["status" => false , "message" => "More than 100 rows not allowed!" , "data"=>null], 200);
                }
                $i_rows = 0;
                while (($row = fgetcsv($handle, 1000, ",")) !== false){
                    if (!$header){
                        $header = array_map(function($value) { return strtolower(str_replace(" " , "_" , trim($value))); }, $row);
                        if(!empty(array_diff($acceptedHeaders,$header))){
                            return response(["status"=>false , "message"=>"Invalid file headers , headers must be ".implode(",", $acceptedHeaders) , "data"=>null] , 200);
                        }
                        continue;
                    }
                    $row = array_map('trim' , $row);
                    $row = array_map('addslashes' , $row);
                    if(in_array("", $row, true)){
                        return response(["status"=>false , "message"=>"Aborted! Blank field passed.Total imported rows $i_rows of $total_rows." , "data"=>null] , 200);
                    }
                    $data = array_combine($header, $row);
                    $supplier = DB::table('suppliers')->where('reference_number' , $data['reference_number'])->first();
                    if(empty($supplier)){
                        DB::transaction(function ()use($data) {
                            $supplier = array('supplier_name' => $data['supplier_name'],'reference_number' => $data['reference_number'],'tags' => $data['tags'],'address' => $data['address'],'city' => $data['city'],'country' => $data['country'],'post_code' => $data['post_code'],'telephone_number' => $data['telephone_number'],'supplier_type' => $data['supplier_type']);
                            $supplier_id =  DB::table('suppliers')->insertGetId($supplier);

                            $supplier_contact = array('first_name' => $data['first_name'],'last_name' => $data['last_name'],'email' => $data['email'],'telephone' => $data['telephone'],'job_position' => $data['job_position'],'supplier_id'=>$supplier_id );
                            $supplier_invoice_contact = array('first_name' =>$data['i_first_name'] ,'last_name' =>$data['i_last_name'],'email' =>$data['i_email'],'telephone' =>$data['i_telephone'],'job_position' =>$data['i_job_position'],'supplier_id'=>$supplier_id);
                            DB::table('supplier_contact')->insert($supplier_contact);
                            DB::table('supplier_invoice_contact')->insert($supplier_invoice_contact);
                        });
                    }
                    $i_rows++;
                }
            }
            return response(["status"=>true , "message"=>"File successfully imported.Skiped duplicate reference number.Total imported rows $i_rows of $total_rows." , "data"=>null] , 200);
        }catch(\Exception $e){
            return response(["status"=>false , "message"=>"Something went wrong, check file.Total imported rows $i_rows of $total_rows" , "data"=>null] , 200);
        }
    }
}
