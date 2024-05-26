<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('pages.userview.index', [
            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::all();

        return view('pages.userview.create', [
            "role" => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->all();

        $rules = [
            'name' => 'required|max:50',
            'username' => 'required|unique:users,username',
            'email'   => 'required|unique:App\Models\User,email|email',
            'password'   => 'required|max:5',
            'role_id'   => 'required',
        ];

        $request->validate($rules);

        $user = new User();
        $user->name  = $payload['name'];
        $user->username = $payload['username'];
        $user->email = $payload['email'];
        $user->role_id = $payload['role_id'];
        $user->password = Hash::make($payload['password']);
        $user->no_niat = $payload['no_niat'];
        $user->phone = $payload['phone'];

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);

        return view('pages.userview.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::find($id);
        $role = Role::all();

        return view('pages.userview.edit', [
            'data' => $data,
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payload = $request->all();
        $user = User::find($id);

        $rules = [
            'name' => 'required|max:50',
            'role_id' => 'required'
        ];

        if ($payload['password'] != null) {
            $rules['password'] = 'required|max:5';
            $user->password = Hash::make($payload['password']);
        }

        if ($payload['email'] != $user->email) {
            $rules['email'] = 'required|unique:App\Models\User,email|email';
            $email = $payload['email'];
        } else {
            $email = $user->email;
        }

        if ($payload['username'] != $user->username) {
            $rules['username'] = 'required|unique:users,username';
            $username = $payload['username'];
        } else {
            $username = $user->username;
        }

        $user->name = $payload['name'];
        $user->username = $username;

        $user->role_id = $payload['role_id'];
        $user->email = $email;
        $user->no_niat = $payload['no_niat'];
        $user->phone = $payload['phone'];

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
