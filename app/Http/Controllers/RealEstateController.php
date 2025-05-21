<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home_building_list(){
        $buildings = Building::all();
        return view('pages.real_estate_list', compact('buildings'));
    }

    public function index()
    {
        $buildings = Building::all();
        return view('admin.real_estate.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.real_estate.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pdf_file' => 'required|mimes:pdf|max:10000', // 10MB max
        ]);

        // Handle thumbnail image
        $thumbnailName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '_thumb.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('uploads/buildings'), $thumbnailName);
        }

        // Handle PDF upload
        $pdf = $request->file('pdf_file');
        $pdfName = time() . '_building.' . $pdf->getClientOriginalExtension();
        $pdf->move(public_path('uploads/buildings'), $pdfName);

        // Save to DB
        Building::create([
            'name' => $request->name,
            'address' => $request->address,
            'thumbnail' => $thumbnailName,
            'pdf_file' => $pdfName,
        ]);

        return redirect()->route('real_estate.index')->with('success', 'Building added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $building = Building::findOrFail($id);
        return view('pages.building', compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function edit(RealEstate $realEstate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RealEstate $realEstate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RealEstate  $realEstate
     * @return \Illuminate\Http\Response
     */
    public function destroy(RealEstate $realEstate)
    {
        //
    }
}
