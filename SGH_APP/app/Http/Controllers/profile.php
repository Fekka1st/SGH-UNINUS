<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profile extends Controller
{
    public function index()
    {
        return view("profile.index");
    }

    public function update(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "nullable|min:5",
        ]);



        try {
            $id=Auth::id();
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled("password")) {
                $user->password = Hash::make($request->password);
            }
            if ($request->hasFile("foto")) {
                $oldFilePath = public_path($user->foto_profile);
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
            return redirect()->route('profile.index')->withToastSuccess('Data Berhasil dirubah');
        } catch (\Throwable $th) {
            return redirect()->route('profile.index')->withToastError('Data Gagal dirubah');
        }
    }
}
