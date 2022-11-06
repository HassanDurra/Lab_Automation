<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\labAutomation;
use App\Models\product_testing;
use App\Http\Controllers\ProductTestingController;

class pages extends Controller
{
 

public function About(){
    return view('UserUIFolder.About');
}


public function Contact(){
    return view('UserUIFolder.Contact');
}
public function Registerproduct(){
    return view('UserUIFolder.TestProducts');
}
// public function products(){
//     $products=labAutomation::paginate(5);

//     return view('UserUIFolder.Products',compact('products'));

// }
public function Home(){

    return view ('UserUIFolder.Home');
    
    
    
    
    }

    public function viewproducts(){
        $products=labAutomation::paginate(8);
        $test=product_testing::where(['Product_status'=>'Tested'])->paginate(8);  
        $retest=product_testing::where(['Product_status'=>'Re-testing'])->paginate(8);
        $testing=product_testing::where(['Product_status'=>'Analysing'])->paginate(8);
        $Cap=labAutomation::where(['Category'=>'Capacitors'])->paginate(8);
        $Gear=labAutomation::where(['category'=>'Gears'])->paginate(8);

        $Switch=labAutomation::where(['Category'=>'Switches'])->paginate(8);

        $Fuse=labAutomation::where(['Category'=>'Fuses'])->paginate(8);



        return view('UserUIFolder.Products',compact('products','testing','retest','test','Cap','Gear','Switch','Fuse'));
    }






    public function search(){

     $search = $_GET['search'];
     $data=labAutomation::where("name","LIKE",'%'.$search.'%')->orwhere("Category","LIKE",'%'.$search.'%')->get();

     return view('UserUIFolder.search',compact('data'));


    }
    
    public function Dashboardsearch(){

        $search = $_GET['search'];
        $product=labAutomation::where("name","LIKE",'%'.$search.'%')->orwhere("Category","LIKE",'%'.$search.'%')->get();
        $test=product_testing::where("Product_name","LIKE",'%'.$search.'%')->orwhere("Product_category","LIKE",'%'.$search.'%')->get();
   
        return view('DashboardSearch',compact('product','test'));
   
   
       }
}
