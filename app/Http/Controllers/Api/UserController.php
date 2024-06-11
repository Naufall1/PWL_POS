<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function index()
    {
        return UserModel::all();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'level_kode' => 'required|exists:m_level,level_kode',
            'username' => 'required',
            'password' => 'required|min:8',
            'nama' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        return response()->json(
            UserModel::create([
                'level_id' => LevelModel::where('level_kode',$request->level_kode)->value('level_id'),
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'nama' => $request->nama,
            ]),
            201
        );
    }
    public function show(UserModel $user)
    {
        return UserModel::find($user);
    }
    public function update(Request $request, UserModel $user)
    {
        $user->update($request->all());
        return UserModel::find($user->user_id);
    }
    public function destroy(UserModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
