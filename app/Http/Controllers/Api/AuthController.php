<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //Membuat register dahulu
    public function register(Request $request)
    {
        $input  = [
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
        ];

        $user = User::create($input);

        return response()->json([
            "status" => "success",
            "message" => "Register success"
        ]);
    }
}
