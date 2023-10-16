<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('skill', ['data' => $skill ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        $skill = new Skill();
        $skill->title = $request->input('title');
        $skill->level = $request->input('level');
        $skill->created = date('Y-m-d H:i:s');
        $skill->updated = date('Y-m-d H:i:s');
        $skill->type = $request->input('type');
        $skill->save();
        return redirect()->route('skill')->with([ 'status_db' => 'success' ]);
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
        $skill = Skill::find($id);
        return view('skill_edit', ['data' => $skill]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, string $id)
    {
        $skill = Skill::find($id);
        $skill->title = $request->input('title');
        $skill->level = $request->input('level');
        $skill->type = $request->input('type');
        $skill->updated = date('Y-m-d H:i:s');
        $skill->save();
        return redirect()->route('skill')->with([ 'status_db' => 'success' ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('skill')->with([ 'status_db' => 'success' ]);
    }
}
