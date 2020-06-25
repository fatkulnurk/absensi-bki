<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Spi;
use App\SpkPo;
use App\User;
use Illuminate\Http\Request;

class SpiController extends Controller
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
        $spkPo = SpkPo::with('user', 'spi')->get();

        return view('dashboard.spi.index', compact('spkPo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $spkPo = SpkPo::findOrFail(\request()->query('spk_po_id'));

        return view('dashboard.spi.create', compact('spkPo'));
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
//            'project_name' => 'required',
//            'company_name' => 'required',
            'phone_number' => 'required',
            'job_description' => 'required',
            'start_date' => 'required',
            'finish_date' => 'required',
            'spk_po_id' => 'required'
        ]);
        Spi::create($request->all());

        return redirect()->route('dashboard.spi.index')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $spkPo = SpkPo::with('user', 'spi')->findOrFail($id);

        return view('dashboard.spi.show', compact('spkPo'));
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
        $users = User::all();

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
