<?php

namespace App\Http\Controllers;

use App\Charts\productChart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
  public function insertProduct(Request $req){
    $formFields = $req->validate([
        "name" => ['required','string','min:3','max:20'],
        "price" =>['required','min:3','max:5'],
        "description" => ['required','min:5'],
        "category" => ['required'],
        "image" => ['required','']
    ]);

    // store the image in a new folder
    $formFields['image'] = $req->file("image")->store("product_images","public");

    Product::create($formFields);
    return back()->with('message','Product added successfully!!!');
    
}

// get the products

public function getProducts(){
    $products = Product::paginate(4);
    return view('welcome',compact('products'));
}

public function findProduct($id){
    $item = Product::find($id);
    return view('pages.user.single-product',compact('item'));
}
}
