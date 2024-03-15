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
            'image'=>'required',
            'category'=>['required','no_spaces'],
            'price'=>['required', 'gt:0'],
            'discount'=> [function ($attribute, $value, $fail) {
                if ($value < 0) {
                    $fail($attribute . ' must be greater than 0.');
                }
            }]
        ]);
        if($request->hasFile('image')){
            $formfields['image']=$request->file('image')->store('itemImage','public');
        }
        Item::create($formfields);
        return redirect('/')->with('message','created successfully!!!');
    }

    public function show(Item $item)
    {
        return view('show', ['item' => $item]);
    }

    public function edit(Item $item){
        return view ('edit',['item'=> $item]);
    }
    public function update(Request $request,Item $item){
        $formfields=$request->validate([
            'name'=>'required',
            'Description'=>'required',
            'amount'=> ['required', 'gt:0'],
            'status'=>'',
            'image'=>'',
            'category'=>['required','no_spaces'],
            'price'=>['required', 'gt:0'],
            'discount'=> [function ($attribute, $value, $fail) {
                if ($value < 0) {
                    $fail($attribute . ' must be greater than 0.');
                }
            }]
        ]);
        if($request->hasFile('image')){
            $formfields['image']=$request->file('image')->store('itemImage','public');
        }
        $item->update($formfields);
        return redirect('/')->with('message','updated successfully!!!');
    }

    public function destroy(Item $item){ 
        $item->delete();
        return redirect('/')->with('message','deleted successfully!!!');
    }
}
