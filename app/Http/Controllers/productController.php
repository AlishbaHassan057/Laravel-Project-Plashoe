<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
  public function insertProduct(Request $req){
    $formFields = $req->validate([
        "name" =>['required','string','min:3','max:25'],
        "price" => ['required', 'min:2', 'max:5'],
        "category"=>['required'],
        "desc"=>['required','string',],
        "image"=>['required']
    ]);
$formFields['image'] = $req->file('image')->store('product_images','public');

Product::create($formFields);
return back()->with('message','Product Added Successfully!!!');
  }

  public function getProducts(){
    $products = Product::paginate(3);
    $categories = Category::paginate(2);
    return view('welcome',compact('products','categories'));
  }
  public function findProduct($id){
    $item = product::find($id);
    return view('pages.user.single-product',compact('item'));
  }
}
