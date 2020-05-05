<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\MasterPosition;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user()->hasRole(RoleEnum::$inspector)) {
            return redirect()->route('dashboard.user.edit', Auth::id());
        }

        $users = User::all();

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $positions = MasterPosition::all();
        $roles = Role::all();
        return view('dashboard.users.create', compact('positions', 'roles'));
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
            'avatar' => 'required|image',
            'name' => 'required|string',
            'position' => 'required|string',
            'role' => 'required|string',
            'nip' => 'required|string|unique:users',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            'gender' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
        ]);
        $avatar = $request->file('avatar');
        $avatarPath = Storage::disk('public')->put('/images/avatar', $avatar);

        $user = User::create([
            'avatar' => $avatarPath,
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'nip' => $request->input('nip'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address')
        ]);

        $role = Role::findById($request->input('role'));
        $user->assignRole($role);

        return redirect()
            ->route('dashboard.user.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $positions = MasterPosition::all();
        $roles = Role::all();

        return view('dashboard.users.edit', compact('user', 'positions', 'roles'));
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
            'avatar' => 'nullable|image',
            'name' => 'required|string',
            'position' => 'required|string',
            'role' => 'required|string',
            'nip' => 'required|string',
            'email' => 'required|string',
            'gender' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
        ]);
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'nip' => $request->input('nip'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address')
        ]);

        if ($request->has('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = Storage::disk('public')->put('/images/avatar', $avatar);
            $user->update([
                'avatar' => $avatarPath,
            ]);
        }

        $role = Role::findById($request->input('role'));
        $user->syncRoles([$role]);

        if (Auth::user()->hasRole(RoleEnum::$inspector)) {
            return redirect()
                ->route('dashboard.user.edit', Auth::id())
                ->with('success', 'User berhasil diupdate');
        }

        return redirect()
            ->route('dashboard.user.index')
            ->with('success', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()
            ->route('dashboard.user.index')
            ->with('success', 'User berhasil dihapus');
    }
}
