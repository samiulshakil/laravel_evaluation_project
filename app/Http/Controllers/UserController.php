<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Http\Requests\UserStoreFormRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $cities = Location::all();
        return view('users.edit', compact('user', 'cities'));
    }

    public function update(UserStoreFormRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
            'city' => $request->city,
            'status' => $request->status,
        ]);

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}
