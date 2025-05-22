<?php

namespace App\Http\Controllers;

use App\Models\AgroPage;
use Illuminate\Http\Request;

class AgroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function homeagro(){
        $agro = AgroPage::latest()->first();
        return view('pages.agro', compact('agro'));
    }
    public function index()
    {
        $agro = AgroPage::latest()->first();
        // dd($agro);
        // return view('admin.agro.index', compact('agro'));
        return view('admin.agro.index', compact('agro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $agro = AgroPage::find($id);
        $agro->update([
            'description' => $request->description,
        ]);
        return redirect()->route('agro.index')->with('message', 'Agro updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
