<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index()
    {
        return BarangModel::all();
    }
    public function store(Request $request)
    {
        return response()->json(
            BarangModel::create($request->all()),
            201
        );
    }
    public function show(BarangModel $product)
    {
        return $product;
    }
    public function update(Request $request, BarangModel $product)
    {
        $product->update($request->all());
        return BarangModel::find($product->barang_id);
    }
    public function destroy(BarangModel $product)
    {
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
