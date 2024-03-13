<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class ItemController extends Controller
{
    //to show the home page
    public function index() {
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $formfields=$request->validate([
            'name'=>'required',
            'Description'=>'required',
            'amount'=> ['required', 'gt:0'],
            'status'=>'',
            'category'=>['required','no_spaces'],
            'price'=>['required', 'gt:0'],
            'discount'=> [function ($attribute, $value, $fail) {
                if ($value < 0) {
                    $fail($attribute . ' must be greater than 0.');
                }
            }]
        ]);
        Item::create($formfields);
        return redirect('/')->with('message','created successfully!!!');
    }
}
