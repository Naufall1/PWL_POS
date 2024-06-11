<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // Atur validasi request yang masuk
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Jika validasi gagal, maka akan diberikan response error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Ambil username dan password dari request
        $credentials = $request->only(['username', 'password']);

        // Jika login gagal, maka akan diberikan response success = false
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Username atau Password Anda salah'
            ], 401);
        }

        // Jika login berhasil, maka akan diberikan response success = true
        return response()->json([
            'success' => true,
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ], 200);
    }
}
