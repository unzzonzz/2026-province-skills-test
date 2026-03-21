<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        User::create($request->validate([
            'username' => 'unique:users',
            'password' => '',
            'name' => '',
        ], ['username.unique' => '이미 가입된 회원입니다.']));

        return redirect('/');
    }

    public function login(Request $request) {
        if (!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('login_error', '아이디 또는 비밀번호가 일치하지 않습니다.');
        }

        return back();
    }

    public function logout() {
        auth()->logout();

        return back();
    }
}
