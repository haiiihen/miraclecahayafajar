<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function articles()
    {
        $articles = Article::orderBy('created_at', 'asc')->paginate(3);
        return view('webpage.article.articles', compact('articles'));
    }

    public function loadMoreData(Request $request)
    {
        $start = $request->input('start');

        $data = Article::orderBy('created_at', 'asc')
            ->offset($start)
            ->limit(3)
            ->get();

        return response()->json([
            'data' => $data,
            'next' => $start + 3
        ]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'article_title' => 'required',
            'article_content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);
        $image->storeAs('public/images/articles', $new_name);

        $form_data = array(
            'article_title' => $request->article_title,
            'article_content' => $request->article_content,
            'image' => $new_name
        );

        Article::create($form_data);

        return redirect()->route('articles')->with('success', 'Article added successfully');
    }

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('webpage.article.article', compact('article'));
    }

    public function moreDetail()
    {
        dd('oke');
    }
}
