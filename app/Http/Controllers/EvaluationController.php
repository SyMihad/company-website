<?php

namespace App\Http\Controllers;

use App\Models\Evaluaiton;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function homeEvaluation(){
        $evaluation = Evaluaiton::latest()->first();
        return view('pages.evaluation', compact('evaluation'));
    }
    public function index()
    {
        $evaluation = Evaluaiton::latest()->first();
        // dd($agro);
        // return view('admin.agro.index', compact('agro'));
        return view('admin.evaluation.index', compact('evaluation'));
    }

    public function update(Request $request, $id)
    {
        $evaluation = Evaluaiton::find($id);
        $evaluation->update([
            'description' => $request->description,
        ]);
        return redirect()->route('evaluation.index')->with('message', 'Evaluation updated successfully');
    }
}
