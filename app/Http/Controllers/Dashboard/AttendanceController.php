<?php

namespace App\Http\Controllers\Dashboard;

use App\Attendance;
use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole(RoleEnum::$inspector)) {
            $attendances = Attendance::where('user_id', Auth::id())->get();
            $users = [];
        } else {
            $attendances = Attendance::with('user')->get();

            $users = User::with('attendances')->get();
        }

        if ($request->has('year') && $request->has('month')) {
            $date = $request->query('year') . '-' . $request->query('month') . '-1';
            $dates = CarbonPeriod::create(new Carbon('first day of ' . $date), new Carbon('last day of ' . $date));
        } else {
            $dates = CarbonPeriod::create(new Carbon('first day of this month'), new Carbon('last day of this month'));
        }

//        return view('dashboard.attendances.list-with-name', compact('users', 'dates'));
        return view('dashboard.attendances.index', compact('users', 'dates', 'attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();

        return view('dashboard.attendances.create', compact('users'));
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
            'date' => 'required',
            'status' => 'required',
        ]);

        $attendance = Attendance::whereDate('date', Carbon::parse($request->input('date'))->toDateTime())
            ->where('user_id', $request->input('user_id'))
            ->get();

        if (blank($attendance)) {
            Attendance::create([
                'user_id' => $request->input('user_id'),
                'date' => Carbon::parse($request->input('date'))->toDateTime(),
                'status' =>  $request->input('status'),
            ]);

            return redirect()->route('dashboard.attendance.index')->with('success', 'berhasil ditambahkan');
        }

        return redirect()->route('dashboard.attendance.index')->with('error', 'data sudah ada');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
