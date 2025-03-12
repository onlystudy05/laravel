<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public $credentials = [ 
        'user1@example.com' => 'password123', 
        'user2@example.com' => 'secret456', 
        'user3@example.com' => 'letmein789',
        'saad@s.com' => '1234'
        ]; 
    public $notes = [ 
        'user1@example.com' => 10, 
        'user2@example.com' => 12, 
        'user3@example.com' => 8, 
        ]; 
    public function show(){
        return view('controle1.login');
    }
    
    public function connect(Request $request){
        $em = $request->input('email');
        $pass = $request->input('pass');
        foreach($this->credentials as $email=>$password){
            if($email == $em && $password == $pass){
                return redirect()->route("home",["nom"=>$email]);
            }
        }
        return redirect()->back()->with('msg', 'Login or password is incorrect');
    }
    public function index($email){
        foreach($this->notes as $em=>$note){
            if($email == $em){
                return view('controle1.acceuil',compact(["email","note"]));
            }
        }
        
    }
}
