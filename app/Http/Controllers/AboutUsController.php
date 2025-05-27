<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // or Imagick if preferred


use Intervention\Image\Geometry\Circle;


use Intervention\Image\Geometry\Point;






class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home_about_us(){
        $members = TeamMember::orderBy('priority')->get();
        $abouts = DB::table('home_abouts')->first();
        // dd($members);
        return view('pages.about', compact('members', 'abouts'));
    }

    public function companyAbout() {
        $abouts = DB::table('home_abouts')->first();
        return view('pages.company_about', compact('abouts'));
    }

    public function boardOfDirectors() {
        $members = TeamMember::orderBy('priority')->get();
        return view('pages.board_of_directors', compact('members'));
    }

    public function index()
    {
        $members = TeamMember::orderBy('priority')->get();
        return view('admin.about_us.index', compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'designation' => 'required',
    //         'priority' => 'required|integer',
    //         'photo' => 'required|image|max:2048',
    //     ]);

    //     $filename = time() . '.' . $request->photo->extension();
    //     $request->photo->move(public_path('image/team'), $filename);

    //     TeamMember::create([
    //         'name' => $request->name,
    //         'designation' => $request->designation,
    //         'priority' => $request->priority,
    //         'photo' => $filename,
    //     ]);

    //     return back()->with('success', 'Team member added');
    // }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'designation' => 'required',
        'priority' => 'required|integer',
        'cropped_photo' => 'required|string',
    ]);

    try {
        // Extract base64 data
        $imageData = explode(',', $request->cropped_photo)[1];
        $decoded = base64_decode($imageData);

        // Save directly
        $filename = 'member_'.Str::random(10).'.png';
        $directory = public_path('image/team');

        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        file_put_contents($directory.'/'.$filename, $decoded);

        TeamMember::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'priority' => $request->priority,
            'photo' => $filename,
        ]);

        return redirect()->route('about_us.index')
               ->with('success', 'Team member added successfully');

    } catch (\Exception $e) {
        return back()->with('error', 'Failed to save: '.$e->getMessage());
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = TeamMember::findOrFail($id);
        $photoPath = public_path('image/team/' . $member->photo);

        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        $member->delete();

        return back()->with('success', 'Team member deleted successfully');
    }
}
