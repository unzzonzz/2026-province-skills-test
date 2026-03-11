<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required'
        ], [
            'username.unique' => 'UNIQUE_ERROR'
        ]);

        User::create($validated);

        return redirect('/');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($validated)) {
            return back();
        }

        return back()->with('LOGIN_ERROR', '아이디 또는 비밀번호가 일치하지 않습니다.');
    }

    public function logout() {
        auth()->logout();
        
        return back();
    }
}
