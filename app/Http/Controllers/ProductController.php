<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products = Product::get();

        return view('webpage/products', ['products' => $products]);
    }

    public function addProduct()
    {

    }

    public function store(Request $request)
    {
        echo($request->file('image'));
        echo($request->product_name);
        exit();
        // save this from ajax except token
        // _token=zeZlyHdxsXhu5p1jskUyw0JlWS1JZFrL6cqQztGo&image=C%3A%5Cfakepath%5CWhatsApp+Image+2024-01-13+at+3.46.13+PM(2).jpeg&product_name=ss&product_description=

       // save image to storage
        // $image = $request->file('image');
        // $image_name = time().'_'.$image->getClientOriginalName();
        // $image->move(public_path('images'), $image_name);

        // if $request has image save it to storage
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $image_name);
            $product = new Product();
            $product->title = 'Product Title';
            $product->subtitle = 'Product Subtitle';
            $product->image = $image_name;
            $product->content_product = $request->product_name;
            $product->content_product_text = $request->product_description;
            $product->save();

        return response()->json(['success' => 'Product added successfully']);
        }
        else {
            return response()->json(['error' => 'Product not added']);
        }

    }

    public function editProduct($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }

    public function detail($id)
    {
        $products = Product::where('id', $id)->get();

        return view('webpage/product_detail', ['products' => $products]);

    }

}
