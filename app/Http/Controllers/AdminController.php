<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use Illuminate\Http\Request;
use Auth;
use Session;

use App\Models\labAutomation;
use App\Models\product_testing;

class AdminController extends Controller
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function adminlogin(Request $request)
    {
    $email=$request->email;
    $pass=$request->password;

    $r=Admin::where(['Admin_email'=>$email,'Admin_password'=>$pass])->get();
    if(isset($r['0']->id)){

        $data=Admin::all();

        
        $request->session()->put('AdminAuth',true);

          
          return redirect('Dashboard',)->with('success','You have logged in successfully');

     }else{


        return redirect('login')->with('error','Entered  Password or Email is incorrect Try Again.');
     }

    }


    public function logout(Request $r){
  Auth::logout();
  Session::flush();
  return redirect('login');
    }

    public function dashboard(Request $request){

        $image= labAutomation::all();
        $count= labAutomation::count();
        $tested=product_testing::count();
        $users=Users::count();
        



    return view('Dashboard',compact('image','count','tested','users'));


    }
public function login(){
return view ('login');
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
