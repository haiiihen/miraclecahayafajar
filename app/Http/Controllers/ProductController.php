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

    // public function addProductb(Request $request)
    // {
    //     $product_name = $request->product_name;
    //     $product_description = $request->product_description;
    //     // $image = has file
    //     if($request->hasfile('image')) {
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time(). '.' . $extension;
    //         $file->move('images/', $filename);
    //     }

    //     $product = new Product();
    //     $product->title_content = $product_name;
    // }

    public function addProduct(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
          ]);

          // Handle file upload (move to storage, etc.)
          $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
          $request->file('image')->storeAs('public/images/products', $imageName);

          // Save product data to database (including image name)
          $product = Product::create([
            'title' => 'Product Title',
            'subtitle' => 'Product Subtitle',
            'content_product' => $request->product_name,
            'content_product_text' => $request->product_description,
            'image' => $imageName,
          ]);

          // Return response with success or error message
          return response()->json([
            'success' => true,
            'message' => 'Product added successfully!',
          ]);
        // exit();
    //     // save this from ajax except token
    //     // _token=zeZlyHdxsXhu5p1jskUyw0JlWS1JZFrL6cqQztGo&image=C%3A%5Cfakepath%5CWhatsApp+Image+2024-01-13+at+3.46.13+PM(2).jpeg&product_name=ss&product_description=

    //    // save image to storage
    //     // $image = $request->file('image');
    //     // $image_name = time().'_'.$image->getClientOriginalName();
    //     // $image->move(public_path('images'), $image_name);

    //     // if $request has image save it to storage
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $image_name = time().'_'.$image->getClientOriginalName();
    //         $image->move(public_path('images'), $image_name);
    //         $product = new Product();
    //         $product->title = 'Product Title';
    //         $product->subtitle = 'Product Subtitle';
    //         $product->image = $image_name;
    //         $product->content_product = $request->product_name;
    //         $product->content_product_text = $request->product_description;
    //         $product->save();

    //     return response()->json(['success' => 'Product added successfully']);
    //     }
    //     else {
    //         return response()->json(['error' => 'Product not added']);
    //     }

    }

    public function editProduct($id)
    {
        $product = Product::find($id);

        return response()->json([
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_update_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_update_product_name' => 'string|max:255',
            'name_update_product_description' => 'string',
        ]);

        // Save product data to database (including image name)
        $product = Product::find($id);
        $product->title = 'Product Title';
        $product->subtitle = 'Product Subtitle';
        $product->content_product = $request->name_update_product_name;
        $product->content_product_text = $request->name_update_product_description;
        $product->save();

        // if contain image update image
        if($request->hasfile('name_update_image')) {
            $file = $request->file('name_update_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->storeAs('public/images/products', $filename);
            $product->image = $filename;
            $product->save();
        }

        // Return response with success or error message
        return response()->json([
        'success' => true,
        'message' => 'Product updated successfully!',
        ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Product deleted successfully'
        ]);
    }

    public function detail($id)
    {
        $products = Product::where('id', $id)->get();

        return view('webpage/product_detail', ['products' => $products]);

    }

}
