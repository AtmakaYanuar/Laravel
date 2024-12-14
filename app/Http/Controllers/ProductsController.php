<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class ProductsController extends Controller
{
    public function products(){
        $products=Product::all();
        return view('products',compact('products'));
    }
    public function add(){
        return view('add');

    }  
     public function store(Request $request){
        $products=Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'stock'=>$request->stock,
        ]);
        return redirect('products');
    }

    public function update(Request $request,$id){
        $products=Product::find($id);
        $products->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'stock'=>$request->stock,
        ]);
        return redirect('products');
    }
    public function delete(Request $request,$id){
        $products=Product::find($id);
        $products->delete();
        return redirect('products');
    }
    public function edit(Request $request,$id){
        $products=Product::find($id);
        return view('edit',compact('products'));
    }
    public function cetak(){
        $products=Product::all();
        $pdf=Pdf::loadview('cetak',compact('products'));
        return $pdf->download('laporan.pdf');
    }
}
