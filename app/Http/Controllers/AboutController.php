<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function saveContent(Request $request)
    {
        // Retrieve data from the request
        $title = $request->input('title');
        $content1 = $request->input('content1');
        $content1Text = $request->input('content1Text');
        $content2 = $request->input('content2');
        $content2Text = $request->input('content2Text');

        // Save the content to the database
        // For simplicity, let's assume you have an About model
        // and you want to update a single record for the about content
        $about = About::first(); // Assuming you have only one about record
        $about->title = $title;
        $about->content1 = $content1;
        $about->content1_text = $content1Text;
        $about->content2 = $content2;
        $about->content2_text = $content2Text;
        $about->save();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Content saved successfully']);
    }
}
