<?php

namespace App\Http\Controllers;

use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->level = 'user';
            $user->api_token = Str::random(10);
            $user->save();
            return redirect()->route('login');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function login(Request $request)
    {
        try {
            if(Auth::attempt($request->only('email', 'password'))) {
                $auth = Auth::user();
                $user = User::with('Response')->where('id', $auth->id)->first();
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->back();
            }
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }
}
