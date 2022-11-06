<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\labAutomation;
use App\Models\product_testing;

class ProductTestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
   $test=new product_testing();

$test->Product_id="LAB-".mt_rand(1000000,9999999);
$test->Testing_id="LAB-".mt_rand(100000000000,999999999999);
$test->Product_name=$r->productname;
$test->Product_category=$r->category;
$test->Product_status=$r->status;
$test->image=$r->image;

// if($r->hasfile('image'))
//     {
//         $file = $r->file('image');
//         $extenstion = $file->getClientOriginalExtension();
//         $filename = time().'.'.$extenstion;
//         $file->move('images/', $filename);
//         $test->image = $filename;
//     }

$test->tester_name=$r->testername;  
$test->save();
return view('UserUIFolder.Success');

    }


// update
public function showupdate($Product_id){
    $data=labAutomation::where('Product_id',$Product_id)->get();

    
    return view('Productedit',['cd'=> $data]);
        }

public function updatetest($Product_id){

$data=product_testing::where('Product_id',$Product_id)->get();
return view('UserUIFolder.Productupdate',['cd'=>$data]);

}

        public function ProductUpdate(Request $request)
        {
            $Product_id= $request->Product_id;
            $category= $request->input('category');
            $name= $request->input('name');
            $price= $request->input('price');





    $isUpdateSuccess=labAutomation::where('Product_id',$Product_id)->update(['name'=>$name,'category'=>$category,'price'=>$price]);

if($isUpdateSuccess)return redirect('Products');
else echo 'not valid';        






        }


        public function retestupdate(Request $request)
        {
            $Product_id= $request->Product_id;
            $Product_category= $request->input('category');
            $Product_name= $request->input('productname');
            $tester_name=$request->input('testername');
            $Product_status= $request->input('status');





    $isUpdateSuccess=product_testing::where('Product_id',$Product_id)->update(['Product_name'=>$Product_name,'Product_category'=>$Product_category,'Product_status'=>$Product_status,'tester_name'=>$tester_name]);

if($isUpdateSuccess)return redirect('products');
else echo 'not valid';        






        }





        public function TestProduct(Request $request)
        {
            $Product_id= $request->Product_id;
            $category= $request->input('category');
            $name= $request->input('productname');
            $tester=$request->input('testername');
            $status= $request->input('status');





    $isUpdateSuccess=product_testing::where('Product_id',$Product_id)->update(['Product_name'=>$name,'Product_category'=>$category,'Product_status'=>$status,'tester_name'=>$tester]);

if($isUpdateSuccess)return redirect('laboratory');
else echo 'not valid';        






        }




public function showtest($Product_id){
    $data=product_testing::where('Product_id',$Product_id)->get();
    
    return view('Producttest',['cd'=> $data]);
        }
    public function fetchdata(){
        $view= product_testing::all();
        return view('laboratory',compact('view'));
    }
    public function remover($Product_id){
        $remove=product_testing::where(['Product_id'=> $Product_id]);
        $remove->delete();
        return redirect()->back();
        }
        public function Tested(){
            $test=product_testing::where(['Product_status'=>'Tested'])->get();
            return view ('Tested',compact('test'));
        }
         
        public function Testing(){
            $testing=product_testing::where(['Product_status'=>'Analysing'])->get();
            return view ('Analysing',compact('testing'));
        }
        
        public function Retesting(){
            $Retesting=product_testing::where(['Product_status'=>'Re-testing'])->get();
            return view ('Re-testing',compact('Retesting'));
        }
}



