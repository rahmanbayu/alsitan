<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        return view('users.index', ['users' => User::latest()->where('role', '!=', 'petani')->paginate(20)]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', 'in:admin,staf,kadis']
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        Alert::success('Berhasil', 'Data user berhasil ditambahkan!');
        return redirect()->route('users.index');
    }

    public function create(){
        return view('users.create');
    }
    public function edit(User $user){
        if($user->role == 'petani'){
            abort(404);
        }
        return view('users.edit', ['user' => $user]);
    }

    public function delete(User $user){
        if($user->role == 'petani'){
            abort(404);
        }
        $user->delete();
        Alert::success('Berhasil', 'User berhasil dihapus!');
        return redirect()->back();
    }
    public function update(User $user, Request $request){
        if($user->role == 'petani'){
            abort(404);
        }
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $user->id],
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'role' => ['required', 'in:admin,staf,kadis']
        ]);
        $user->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'role' =>$request->role,
            'password' => $request->password != '' ? Hash::make($request->password) : $user->password,
        ]);
        Alert::success('Berhasil', 'User berhasil diupdate!');
        return redirect()->route('users.index');
    }
}
