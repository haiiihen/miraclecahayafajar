<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function getContent () {
        $content = About::get();
        // return to the view about.blade
        return view('webpage/about', ['content' => $content]);
    }

    public function saveContent(Request $request)
    {
        $about = About::first();
        for ($i = 1; $i <= 6; $i++) {
            $image = $request->file('image' . $i);

            // Check if image exists
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('public/images/abouts', $imageName);

                //get all image name
                // $imageName1 = $request->file('image1')->getClientOriginalName();
                // $imageName2 = $request->file('image2')->getClientOriginalName();

                // get all image name
                // $imageName = $request->file('image' . $i)->getClientOriginalName();
                // $imageName = $request->file('image' . $i)->storeAs('public/images/about', $imageName);

                // get all image name
                // $imageName1 = $request->file('image1')->getClientOriginalName();
                // $imageName2 = $request->file('image2')->getClientOriginalName();
                // $imageName3 = $request->file('image3')->getClientOriginalName();

                // $imageName1 = $request->file('image1')->storeAs('public/images/about', $imageName1);
                // $imageName2 = $request->file('image2')->storeAs('public/images/about', $imageName2);
                // $imageName3 = $request->file('image3')->storeAs('public/images/about', $imageName3);



                // Save the image name to the database in image1, image2, image3, image4, image5

                // using loop to save all image name
                // $about = About::first();
                $about['image' . $i] = $imageName;
                // $about->save();

                // About::create(['image' => $imageName]);
                // About::create([
                //     'image1' => $imageName
                // ]);
            }

                $about->title = $request->input('title');
                $about->content1 = $request->input('content1');
                $about->content1_text = $request->input('content1Text');
                $about->content2 = $request->input('content2');
                $about->content2_text = $request->input('content2Text');
                $about->save();
        }

        // return ($image);
        // Retrieve data from the request
        // $title = $request->input('title');
        // $content1 = $request->input('content1');
        // $content1Text = $request->input('content1Text');
        // $content2 = $request->input('content2');
        // $content2Text = $request->input('content2Text');
        // $image1 = $request->file('image1');
        // $image2 = $request->file('image2');
        // $image3 = $request->file('image3');
        // $image4 = $request->file('image4');
        // $image5 = $request->file('image5');

        // // save all image and content
        // $about = About::first();
        // $about->title = $title;
        // $about->content1 = $content1;
        // $about->content1_text = $content1Text;
        // $about->content2 = $content2;
        // $about->content2_text = $content2Text;

        // $about->save();

        // dd($title);
        // save title
        // $about = About::first();
        // $about->title = $title;
        // $about->save();

        // dd($title, $content1, $content1Text, $content2, $content2Text);

        // Save the content to the database
        // For simplicity, let's assume you have an About model
        // and you want to update a single record for the about content
        // $about = About::first(); // Assuming you have only one about record
        // $about->title = $title;
        // $about->content1 = $content1;
        // $about->content1_text = $content1Text;
        // $about->content2 = $content2;
        // $about->content2_text = $content2Text;
        // $about->save();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Content saved successfully']);
        // return response()->json($about);
    }
}
