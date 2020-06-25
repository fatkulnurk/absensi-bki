<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\SpkPo;
use App\User;
use Illuminate\Http\Request;

class SpkPoController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['role:' . RoleEnum::$admin . '|' . RoleEnum::$leader])->only('show');
//        $this->middleware([RoleEnum::$leader])->only(['index', 'edit', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $spkPo = SpkPo::with('user')->get();

        return view('dashboard.spk_po.index', compact('spkPo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.spk_po.create');
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
            'spn_number' => 'required',
            'job_name' => 'required',
            'location' => 'required',
            'owner' => 'required',
            'company_name' => 'required',
        ]);
        SpkPo::create($request->all());

        return redirect()->route('dashboard.spk-po.index')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $spkPo = SpkPo::with('user')->findOrFail($id);

        return view('dashboard.spk_po.show', compact('spkPo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $spkPo = SpkPo::findOrFail($id);
        $users = User::role(RoleEnum::$inspector)->get();

        return view('dashboard.spk_po.edit', compact('spkPo', 'users'));
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
        if (auth()->user()->hasRole(\App\Enums\RoleEnum::$admin)) {
            $request->validate([
                'spn_number' => 'required',
                'job_name' => 'required',
                'location' => 'required',
                'owner' => 'required',
                'company_name' => 'required',
            ]);
        } else {
            $request->validate([
                'user_id' => 'required'
            ]);
        }

        $leave = SpkPo::findOrFail($id);
        $leave->update($request->all());

        return redirect()->route('dashboard.spk-po.index')->with('success', 'status berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $spkPo = SpkPo::findOrFail($id);
        $spkPo->delete();

        return redirect()->route('dashboard.spk-po.index')->with('success', 'berhasil dihapus');
    }
}
