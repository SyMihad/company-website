<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function homeagro(){
        $about = AboutPage::latest()->first();
        return view('pages.agro', compact('agro'));
    }
    public function index()
    {
        $about = AboutPage::latest()->first();
        // dd($agro);
        // return view('admin.agro.index', compact('agro'));
        return view('admin.about_page.index', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = AboutPage::find($id);
        $about->update([
            'description' => $request->description,
        ]);
        return redirect()->route('aboutPage.index')->with('message', 'About updated successfully');
    }
}
