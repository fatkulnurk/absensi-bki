<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\PersonalQualifications;
use App\User;
use Illuminate\Http\Request;

class PersonalQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $personalQualificatons = PersonalQualifications::all();

        return view('dashboard.personal-qualifications.index', compact('personalQualificatons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        return view('dashboard.personal-qualifications.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string',
            'name' => 'required|string',
            'year' => 'required|string|min:4|max:4',
        ]);
        User::findOrFail($request->input('user_id'));

        PersonalQualifications::create($request->only(['user_id', 'name', 'year']));

        return redirect()->route('dashboard.personal-qualification.index')->with('success', 'berhasil ditambahkan');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $personalQualification = PersonalQualifications::findOrFail($id);
        $users = User::all();

        return view('dashboard.personal-qualifications.edit', compact('personalQualification',  'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|string',
            'name' => 'required|string',
            'year' => 'required|string|min:4|max:4',
        ]);
        User::findOrFail($request->input('user_id'));

        $personalQualification = PersonalQualifications::findOrFail($id);
        $personalQualification->update($request->only(['user_id', 'name', 'year']));

        return redirect()->route('dashboard.personal-qualification.index')->with('success', 'berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalQualification = PersonalQualifications::findOrFail($id);
        $personalQualification->delete();

        return redirect()->route('dashboard.personal-qualification.index')->with('success', 'berhasil dihapus');
    }
}
