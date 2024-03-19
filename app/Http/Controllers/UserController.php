<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function create(){
        return view("user.create");
    }
    public function store(Request $request){
        $formFields=$request->validate(([

            'name'=>'required',
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6'],
            'username'=>['required','min:4','no_spaces',Rule::unique('users','username')],
            'phone'=>['required','digits:9'],
            'about'=>['required'],
            'profile_picture'=>'',
            'company_name'=>'',
            'company_website'=>''
        ]));

        $formFields['password']=bcrypt($formFields['password']);

        if($request->hasFile('profile_picture')){
            $formfields['profile_picture']=$request->file('profile_picture')->store('UserProfile','public');
        }
       
        $user=User::create($formFields);

        auth()->login($user);

        return redirect('/')->with("message",'created & logged in successfully!!!');
    }
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/')->with('message','logged out successfully!!!');
    }

    public function login(){
        return view('user.login');
    }

    public function authentcation(Request $request){
        $formFields=$request->validate([
            'username'=>['required','min:4','no_spaces'],
            'password'=>['required','min:6'],
            
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','successfully logged in!!');
        }
        return back()->withErrors(['username'=>"Invalid Credentials"])->onlyInput('username');
    }
}

