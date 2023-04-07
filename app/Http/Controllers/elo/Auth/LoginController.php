<?php

namespace App\Http\Controllers\elo\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    
    public function register() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        // dd($data['password']);
        User::create($data);
        return redirect()->route('login');
    }

    public function auth_login (Request $request) {
        $user = User::where('username', $request->username)->first();
        // dd($user->role);
        $password = $request->password;

        if($user == null) {
            // return 'login';
            return redirect()->route('login');
        }

        if (Auth::attempt(['username' => $user->username, 'password' => $password])) {
            
            return redirect()->route('admin');

        }
        
    }

    public function reset_password () {
        return view('auth.forget');       
    }

    public function reset (Request $request) {
        
        $request->validate([
            'username' => 'required',
            'password-confirm' => 'same:password',
        ]);
        
        $data = $request->all();
        // dd($data['username']);

        $user = User::where('username', $data['username'])->first();
        if ($user == null) {
            
            return redirect()->route('reset_password')->with('pesan','Username tidak ada');
        }
        $data['password'] = Hash::make($data['password']);
        // dd($user->password);
        $user->update($data);
        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}
