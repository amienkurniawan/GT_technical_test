<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    public function index()
    {
        $data = User::find(Auth::user()->id);
        return view('pages.profile', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            // code...
            // Ambil data user berdasarkan ID
            $user = User::find($id);
            if (!$user) {
                // Handle jika user tidak ditemukan
                return redirect()->route('profile')->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|max:255|unique:users,email,' . $user->id,
                'password' => 'required|confirmed|min:6'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // update data user
            $user->name = $request->input('name');
            $user->email = $request->input('email');

            if ($request->has('password')) {
                $user->password = bcrypt($request->input('password'));
            }

            $user->save();

            return redirect()->route('profile')->with('success', 'Berhasil mengubah data user');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            return redirect()->route('profile')->with(['error' => 'Gagal mengubah data user']);
        }
    }
}
