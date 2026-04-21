<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
   
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user
        ]);
    }

    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'error' => 'Invalid credentials'
            ], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'token' => $token
        ]);
    }

   
    public function me()
    {
        return response()->json(Auth::user());
    }

    
   



public function logout()
{
    try {
        JWTAuth::parseToken()->invalidate();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Logout failed',
            'msg' => $e->getMessage()
        ]);
    }
}


public function forgotPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return response()->json([
            'message' => 'User not found'
        ], 404);
    }

  
    $user->password = Hash::make($request->password);
    $user->save();

    return response()->json([
        'message' => 'Password updated successfully'
    ]);
}

public function refresh()
{
    return response()->json([
        'token' => auth()->refresh()
    ]);
}
}