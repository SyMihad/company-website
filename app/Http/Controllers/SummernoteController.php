<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummernoteController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('public/summernote', $filename);

            // Return the image URL
            return asset('storage/summernote/'.$filename);
        }
        return response()->json(['error' => 'No image uploaded.'], 400);
    }
}
