<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Leave;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        if (Auth::user()->hasRole(RoleEnum::$inspector)) {
            $leaves = Leave::where('user_id', Auth::id())->get();
        } else {
            $leaves = Leave::all();
        }

        return view('dashboard.leaves.index', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        return view('dashboard.leaves.create', compact('users'));
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
            'user_id' => 'required',
            'year' => 'required',
            'long' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'work_at' => 'required',
            'substitute' => 'required',
            'excuse' => 'required',
        ]);

        $user = User::findOrFail($request->input('user_id'));

        Leave::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'position' => $user->position,
            'year' => $request->input('year'),
            'long' => $request->input('long'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'work_at' => $request->input('work_at'),
            'substitute' => $request->input('substitute'),
            'excuse' => $request->input('excuse'),
        ]);

        return redirect()->route('dashboard.leave.index')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $leave = Leave::findOrFail($id);

        return view('dashboard.leaves.edit', compact('leave'));
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
//        $request->validate([
//            'user_id' => 'required',
//            'year' => 'required',
//            'long' => 'required',
//            'start_date' => 'required',
//            'end_date' => 'required',
//            'work_at' => 'required',
//            'substitute' => 'required',
//            'excuse' => 'required',
//        ]);
        $request->validate([
            'status' => 'required'
        ]);

        $leave = Leave::findOrFail($id);
        $leave->update($request->only([
            'status'
        ]));

        return redirect()->route('dashboard.leave.index')->with('success', 'status berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->delete();

        return redirect()->route('dashboard.leave.index')->with('success', 'berhasil dihapus');
    }
}
