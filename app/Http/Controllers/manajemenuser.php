<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class manajemenuser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus Data!';
        $text = "Kamu Yakin Mau Hapus Data?";
        confirmDelete($title, $text);

        $user = User::latest()->get();
        return view('manajemenuser.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'password'   => 'required',
            'email'   => 'required',
            'foto'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);


        $filename =
        round(microtime(true) * 1000) .
        "-" .
        str_replace(
            " ",
            "-",
            $request->file("foto")->getClientOriginalName()
        );
    $request
        ->file("foto")
        ->move(public_path("img/profile"), $filename);

        $user = User::create([
            'name'     => $request->name,
            'email'   => $request->email,
            'password'   =>bcrypt($request->password),
            'foto_profile'   =>"/img/profile/" . $filename
        ]);
        return redirect('manajemen_user')->withToastSuccess('Data Berhasil ditambahkan');
    }


    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'nullable|min:6', // Optional jika password tidak harus diubah
    ]);

    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;

    // Jika ada password baru, lakukan hash
    if ($request->filled('password')) {

        $user->password = Hash::make($request->password);
    }

    // Jika ada file foto baru
    if ($request->hasFile('foto')) {

        $data = User::find($id);
        $oldFilePath = public_path($data->foto_profile);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);

        }

        $filename =
        round(microtime(true) * 1000) .
        "-" .
        str_replace(
            " ",
            "-",
            $request->file("foto")->getClientOriginalName()
        );
    $request
        ->file("foto")
        ->move(public_path("img/profile"), $filename);
        $user->foto_profile = "/img/profile/" . $filename;
    }

    $user->save();

    return redirect('manajemen_user')->withToastSuccess('Data Berhasil dirubah');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = User::find($id);
        if ($data->foto) {
            $oldFilePath = public_path($data->foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        User::destroy($id);
        return redirect('manajemen_user')->withToastSuccess('Data Berhasil dihapus');
    }
}
