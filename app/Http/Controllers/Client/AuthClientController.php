<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthClientController extends Controller
{
    public function login()
    {
        if (backpack_auth()->check()) {
            return redirect("/");
        }
        return view("clients.login");
    }

    public function checkLogin(Request $request)
    {
        if (!isset($request->email) || !isset($request->password)) {
            return redirect()->back()->with("empty", "Tài khoản mật khẩu không được để trống");
        }

        if (User::where("email", "=", $request->email)->count() == 0) {
            return redirect()->back()->with("empty", "Không tìm thấy tài khoản");
        }
        $user = User::where("email", "=", $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with("empty", "Sai mật khẩu");
        }
        backpack_auth()->loginUsingId($user->id, true);
        return redirect("/");
    }

    public function logout()
    {
        backpack_auth()->logout();
        return redirect("/");
    }
}
