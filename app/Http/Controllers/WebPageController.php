<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\About;
use App\Models\Home;

class WebPageController extends Controller
{
    public function home() {
        // return view('webpage/home');
        // get all data from all table in database
        $homes = Home::all();
        $products = Product::get();
        $selected_articles = Article::where('id', 1)->paginate(3);
        $articles = Article::paginate(3);
        $testimonials = Testimonial::all();
        $contacts = Contact::all();
        $abouts = About::all();
        return view('webpage/home', ['homes' => $homes, 'products' => $products, 'selected_articles' => $selected_articles, 'articles' => $articles, 'testimonials' => $testimonials, 'contacts' => $contacts, 'abouts' => $abouts]);
    }

    // public function about() {
    //     return view('webpage/about');
    // }

    public function products() {
        return view ('webpage/products');
    }

    public function articles() {
        return view ('webpage/article/articles');
    }

    public function article($slug) {
        return view ('webpage/article/article', ['slug' => $slug]);
    }

    public function contact() {
        return view ('webpage/contact');
    }

    public function saveContent() {
        return response()->json(['message' => 'Content saved successfully']);
    }
}
