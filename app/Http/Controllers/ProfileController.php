<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $profile = Profile::all();
        return view('profile', ['data' => $profile ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileRequest $request)
    {
        $profile = new Profile();
        $profile->first_name = $request->input('first_name');
        $profile->last_name	 = $request->input('last_name');
        $profile->phone	= $request->input('phone');
        $profile->email	= $request->input('email');
        $profile->birthday = $request->input('birthday');
        $profile->save();
        // return view('profile', ['status' => 'success' ]);
        return redirect()->route('profile')->with([ 'status_db' => 'success' ]);
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
        $profile = Profile::find($id);
        return view('profile_edit', ['data' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, string $id)
    {
        $profile = Profile::find($id);
        $profile->first_name = $request->input('first_name');
        $profile->last_name	 = $request->input('last_name');
        $profile->phone	= $request->input('phone');
        $profile->email	= $request->input('email');
        $profile->birthday = $request->input('birthday');
        $profile->save();
        return redirect()->route('profile')->with([ 'status_db' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profile')->with([ 'status_db' => 'success' ]);
    }
}
