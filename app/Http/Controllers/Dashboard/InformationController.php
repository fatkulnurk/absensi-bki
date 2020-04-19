<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Information;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $informations = Information::all();

        return view('dashboard.informations.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.informations.create');
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
            'code' => 'required|string',
            'title' => 'required|string',
            'number' => 'required|string',
            'description' => 'required|string'
        ]);
        Information::create($request->only(['code', 'date', 'title', 'number', 'description']));

        return redirect()->route('dashboard.information.index')->with('success', 'berhasil ditambahkan');
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
        $information = Information::findOrFail($id);
        return view('dashboard.informations.edit', compact('information'));
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
            'code' => 'required|string',
            'title' => 'required|string',
            'number' => 'required|string',
            'description' => 'required|string'
        ]);
        $information = Information::findOrFail($id);
        $information->update($request->only(['code', 'date', 'title', 'number', 'description']));

        return redirect()->route('dashboard.information.index')->with('success', 'berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $information = Information::findOrFail($id);
        $information->delete();
        return redirect()->route('dashboard.information.index')->with('success', 'berhasil dihapus');
    }
}
