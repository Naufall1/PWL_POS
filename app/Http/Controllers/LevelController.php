<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
    public function index(): View
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Level',
            'list' => ['Home', 'Level']
        ];

        $page = (object) [
            'title' => 'Daftar level yang terdaftar dalam sistem'
        ];

        $activeMenu = 'level';

        return view('level.index', compact('breadcrumb', 'page', 'activeMenu'));
    }

    // Ambil data user dalam bentuk json untuk datatables
    public function list(Request $request): JsonResponse
    {
        $levels = LevelModel::all();

        return DataTables::of($levels)
            ->addIndexColumn() // menambahkan kolom index / no urut (default namakolom: DT_RowIndex)
            ->addColumn('aksi', function ($level) { // menambahkan kolom aksi
                $btn = '<a href="' . url('/level/' . $level->level_id . '/edit') . '"class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/level/' . $level->level_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button>
                    </form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    // public function create(): View
    // {
    //     $breadcrumb = (object) [
    //         'title' => 'Tambah User',
    //         'list' => ['Home', 'User', 'Tambah']
    //     ];

    //     $page = (object) [
    //         'title' => 'Tambah User Baru'
    //     ];

    //     $level = LevelModel::all();
    //     $activeMenu = 'user';

    //     return view('user.create', compact('breadcrumb', 'page', 'level', 'activeMenu'));
    // }

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'username' =>'required|string|min:3|unique:m_user,username',
    //         'nama' =>'required|string|max:100',
    //         'password' => 'required|min:5',
    //         'level_id' => 'required|integer'
    //     ]);

    //     UserModel::create([
    //         'username' => $request->username,
    //         'nama' => $request->nama,
    //         'password' => bcrypt($request->password),
    //         'level_id' => $request->level_id
    //     ]);

    //     return redirect('/user')->with('success','Data user berhasil disimpan');
    // }

    // public function show(string $id): View
    // {
    //     $user = UserModel::with('level')->find($id);

    //     $breadcrumb = (object) [
    //         'title' => 'Tambah User',
    //         'list' => ['Home', 'User', 'Detail']
    //     ];

    //     $page = (object) [
    //         'title' => 'Detail User'
    //     ];

    //     $activeMenu = 'user';

    //     return view('user.show', compact('breadcrumb', 'page', 'activeMenu', 'user'));
    // }

    // public function edit(string $id): View
    // {
    //     $user = UserModel::find($id);
    //     $level = LevelModel::all();

    //     $breadcrumb = (object) [
    //         'title' => 'Tambah User',
    //         'list' => ['Home', 'User', 'Edit']
    //     ];

    //     $page = (object) [
    //         'title' => 'Edit User'
    //     ];

    //     $activeMenu = 'user';

    //     return view(
    //         'user.edit',
    //         compact('breadcrumb', 'page', 'activeMenu', 'user', 'level')
    //     );
    // }

    // public function update(Request $request, string $id): RedirectResponse
    // {
    //     $request->validate([
    //         'username' =>'required|string|min:3|unique:m_user,username,'.$id.',user_id',
    //         'nama' =>'required|string|max:100',
    //         'password' => 'nullable|min:5',
    //         'level_id' => 'required|integer'
    //     ]);

    //     UserModel::find($id)->update([
    //         'username' => $request->username,
    //         'nama' => $request->nama,
    //         'password' => $request->password ? bcrypt($request->password) : UserModel::find($id)->password,
    //         'level_id' => $request->level_id
    //     ]);

    //     return redirect('/user')->with('success','Data user berhasil diubah');
    // }

    // public function destroy(string $id): RedirectResponse
    // {
    //     $check = UserModel::find($id);
    //     if (!$check) {
    //         return redirect('/user')->with('error','Data user tidak ditemukan');
    //     }
    //     try {
    //         UserModel::destroy($id);
    //         return redirect('/user')->with('success','Data user berhasil dihapus');
    //     } catch (\Illuminate\database\QueryException $e ) {
    //         return redirect('/user')->with('error','Data user gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
    //     }
    // }
}
