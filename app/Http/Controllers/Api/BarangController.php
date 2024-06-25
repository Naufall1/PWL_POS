<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    function index()
    {
        return BarangModel::all();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "kategori_id" => 'required',
            "barang_kode" => 'required',
            "barang_nama" => 'required',
            "harga_beli" => 'required',
            "harga_jual" => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        return response()->json(
            BarangModel::create(array_merge($request->except('image'),[
                'image' => $request->image->hashName()
            ])),
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
