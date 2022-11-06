<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $r){
   $contact= new contact;
$contact->first_name=$r->firstName;
$contact->last_name=$r->lastName;
$contact->email=$r->email;
$contact->message=$r->message;
$contact->save();
return redirect('contact');



    }
    
    public function message($id){
        $remove=contact::where(['id'=> $id]);
        $remove->delete();
        return redirect()->back();
        }
    public function getmessage(){
        $get=contact::all();
        return view ('Contact',compact('get'));
    }
     
}
