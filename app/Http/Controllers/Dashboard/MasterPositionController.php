<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\MasterPosition;
use Illuminate\Http\Request;

class MasterPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $positions = MasterPosition::all();

        return view('dashboard.master.positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.master.positions.create');
    }

    public function validatation(Request $request) {
        $request->validate(['name' => 'required|string']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validatation($request);

        MasterPosition::create([
            'name' => $request->input('name')
        ]);
        return redirect()->route('dashboard.master-position.index')->with('success', 'berhasil ditambahkan');
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
        $position = MasterPosition::findOrFail($id);

        return view('dashboard.master.positions.edit', compact('position'));
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
        $this->validatation($request);
        $position = MasterPosition::findOrFail($id);
        $position->name = $request->input('name');
        $position->save();

        return redirect()->route('dashboard.master-position.index')->with('success', 'berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $position = MasterPosition::findOrFail($id);
        $position->delete();

        return redirect()->route('dashboard.master-position.index')->with('success', 'berhasil dihapus');
    }
}
