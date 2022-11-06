<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\labAutomation;
use App\Models\product_testing;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
     return view('UserUIFolder.Register');
    }
    
public function remover($Product_id){
    $users=users::where(['id'=> $Product_id]);
    $users->delete();
    return redirect()->back();
    }


    public function users(){
        $users=Users::all();
        return view('Users',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertusers(Request $request)
    {
        $users= new Users;



        $users->user_name=$request->user;
        $users->email=$request->email;
        $users->Country=$request->Country;
        $users->age=$request->age;
        $users->gender=$request->Gender;
        $users->password=$request->password;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $users->image = $filename;
        }
          















        $users->save();
        return redirect('userlogin')->with('success','You have success-fully register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userpost(Request $request)
    {
        $email=$request->email;
        $pass = $request->password;
        $r = Users::where(['email'=>$email,'password'=>$pass])->get();
        if(isset($r['0']->id))
        {   
            $request->Session()->put('Users',true);
            return redirect('Home')->with('success','Logged in');
        }
        else
        {
                   return redirect('userlogin')->with('error','Incorrect Password or Email Please Try Again');
        }
        
    }
  
 
    public function userlogin()
    {
        return view('UserUIFolder.userlogin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
