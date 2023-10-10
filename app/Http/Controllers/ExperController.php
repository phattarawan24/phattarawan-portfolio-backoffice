<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exper;
use App\Http\Requests\ExperRequest;

class ExperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exper = Exper::all();
        return view('exper', ['data' => $exper ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exper_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperRequest $request)
    {
        $exper = new Exper();
        $exper->title = $request->input('title');
        $exper->detail = $request->input('detail');
        $exper->date = $request->input('date');
        $exper->save();
        return redirect()->route('exper')->with([ 'status_db' => 'success' ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exper = Exper::find($id);
        return view('exper_edit', ['data' => $exper]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exper = Exper::find($id);
        $exper->title = $request->input('title');
        $exper->detail = $request->input('detail');
        $exper->date = $request->input('date');
        $exper->save();
        return redirect()->route('exper')->with([ 'status_db' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exper = Exper::find($id);
        $exper->delete();
        return redirect()->route('exper')->with([ 'status_db' => 'success' ]);
    }
}
