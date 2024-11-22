<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class manajemenuser extends Controller
{
    public function index()
    {
        $title = "Hapus Data!";
        $text = "Kamu Yakin Mau Hapus Data?";
        confirmDelete($title, $text);
        $user = User::latest()->get();
        return view("manajemenuser.index", compact("user"));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "password" => "required",
            "email" => "required",
            "foto" => "required|image|mimes:jpeg,jpg,png|max:2048",
        ]);
        $filename =
            round(microtime(true) * 1000) .
            "-" .
            str_replace(
                " ",
                "-",
                $request->file("foto")->getClientOriginalName()
            );
        $request->file("foto")->move(public_path("img/profile"), $filename);
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "foto_profile" => "/img/profile/" . $filename,
        ]);
        return redirect("manajemen_user")->withToastSuccess(
            "Data Berhasil ditambahkan"
        );
    }
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "nullable|min:6",
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled("password")) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile("foto")) {
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
            $request->file("foto")->move(public_path("img/profile"), $filename);
            $user->foto_profile = "/img/profile/" . $filename;
        }

        $user->save();

        return redirect("manajemen_user")->withToastSuccess(
            "Data Berhasil dirubah"
        );
    }
    public function destroy(string $id)
    {
        $data = User::find($id);
        if ($data->foto) {
            $oldFilePath = public_path($data->foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        User::destroy($id);
        return redirect("manajemen_user")->withToastSuccess(
            "Data Berhasil dihapus"
        );
    }
}
