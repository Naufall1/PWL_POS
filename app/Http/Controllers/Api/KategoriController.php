<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index()
    {
        return KategoriModel::all();
    }
    public function store(Request $request)
    {
        return response()->json(
            KategoriModel::create($request->all()),
            201
        );
    }
    public function show(KategoriModel $category)
    {
        return KategoriModel::find($category);
    }
    public function update(Request $request, KategoriModel $category)
    {
        $category->update($request->all());
        return KategoriModel::find($category);
    }
    public function destroy(KategoriModel $category)
    {
        $category->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
