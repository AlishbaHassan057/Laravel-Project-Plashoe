<?php

namespace App\Http\Controllers;

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
return back();
  }
}
