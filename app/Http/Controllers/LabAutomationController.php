<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\labAutomation;
use App\Models\product_testing;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LabAutomationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */







    //  public function counted(){
    //      $count= labAutomation::count();
    //      return view('lab',compact('count'));
    //  }
    public function InsertPro(Request $r)

    
    {
    
    $product= new labAutomation;

    $product->Product_id="LAB".mt_rand(1000000000,9999999999);
    $product->name=$r->Product;
    $product->Price=$r->Price;
    $product->Category=$r->category;
    if($r->hasfile('image'))
    {
        $file = $r->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('images/', $filename);
        $product->image = $filename;
    }

    $product->save();
    return redirect()->back();

    }


    public function showProducts(){


        $product = labautomation::all();

        return view("Products", compact("product"));
    }

    public function data(){
      
        return view('Dashboard',compact('test'));
    }


// public function remover($Product_id){
// $remove=labAutomation::find($Product_id);
// $remove->delete();
// return redirect()->back();
// }
public function remover($Product_id){
    $remove=labAutomation::where(['Product_id'=> $Product_id]);
    $remove->delete();
    return redirect()->back();
    }


public function fetched(){
    $image= labAutomation::all();
    $count= labAutomation::count();
    $tested=product_testing::count();
    $users=Users::count();
       
      


    return view('Dashboard',compact('image','count','tested','users'));
}
 
   
    // public function dashboard(){
    //     return view('Lab');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch()
    {
        $auto = labAutomation::all();
        return view('Dashboard',compact("auto"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function counter()
    {
        $categories=labautomation::where('name')->count();
       
        $tester =product_testing::where('tester_name')->count();
        return view('tester',compact('categories','tester'));
      
    }

    public function capacitors(){
       $product=labAutomation::where(['Category'=>'Capacitors'])->get();
        
             return view ('Capacitors',compact('product'));
    }
    public function Switches(){
        $product=labAutomation::where(['Category'=>'Switches'])->get();
        return view ('Switches',compact('product'));
    }
    public function Fuses(){
        $product=labAutomation::where(['Category'=>'Fuses'])->get();
        return view ('Fuses',compact('product'));
    }
    public function Gears(){
        $product=labAutomation::where(['Category'=>'Gears'])->get();
        return view ('Gears',compact('product'));
    }
    public function test($Product_id){


if(session('Users')!=""){
    $data=labAutomation::where('Product_id',$Product_id)->get();

    
    return view('UserUIFolder.TestProducts',['cd'=> $data]);
}
else{
    return redirect('/userlogin')->with('error ','Login First before sending for test');
}




    }
    public function logout(Request $r){
        Auth::logout();
        Session::flush();
        return redirect('Home');
          }
    
}