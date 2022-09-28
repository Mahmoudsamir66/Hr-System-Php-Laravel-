<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function create(){
        $Products=products::get();
        return view('products.create',compact('Products'));

    }

    function store(Request $request){
        products::create([
            'name'=>$request->name,
            'date'=>$request->date,
            'price'=>$request->price,

        ]);
        return redirect()->back();

    }

    function search(){
        return view('products.search');
    }
    function save(Request $request){

            $start=$request->datefrom;
            $end=$request->dateto;

        $Products=products::where('date','>=',$start)->where('date','<=',$end)->get();


        return view('products.search',compact('Products'));

    }
    function delete(products $id){
       // $product=products::find($products);
      //  dd();
        $id->delete();
        return redirect()->back(); 
        //$product->delete();
      //  dd($product);
    }
    function Edit(products $id){

      return view('products.Edit',compact('id'));
    }
    function update(Request $request,$id){
       products::where('id',$id)->update([
           'name'=>$request->name,
           'price'=>$request->price,
           'date'=>$request->date,
       ]);
        return redirect()->route('product.create');
    }


}

