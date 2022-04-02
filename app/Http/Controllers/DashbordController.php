<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashbord()
    {
        $products = Product::OrderBy('id','desc')->get();
        return view('home',compact('products'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'photo' => 'required|image|max:2048'
        ],[
            'photo.image' => 'The Photo must be an PNG or JPG.',
            'photo.max' => 'The Photo size should be a max is 2 MB.',
        ]);
        $photo = $req->file('photo');
        $photoNewName = 'product_'.time().'.'.$photo->getClientOriginalExtension();
        $photo->move('uplode/products/',$photoNewName);
        $inputs = [
            'name'=>$req->input('name'),
            'price'=>$req->input('price'),
            'desc'=>$req->input('desc'),
            'photo'=>$photoNewName
        ];
        Product::create($inputs);
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product_edit',compact('product'));
    }

    public function update(Request $req,$id)
    {
        $product = Product::find($id);
        $inputs = [
            'name'=>$req->input('name'),
            'price'=>$req->input('price'),
            'desc'=>$req->input('desc'),
        ];
        $photo = $req->file('photo');
        if ($photo) {
            if (file_exists('uplode/products/'.$product->photo)) {
                unlink('uplode/products/' . $product->photo);
                $photoNewName = 'product_'.time().'.'.$photo->getClientOriginalExtension();
                $photo->move('uplode/products/',$photoNewName);
                $inputs['photo'] = $photoNewName;
            }
        }
        $product->update($inputs);
        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (file_exists('uplode/products/'.$product->photo)) {
            unlink('uplode/products/'.$product->photo);
        }
        $product->delete();
        return redirect()->back();
    }
}
