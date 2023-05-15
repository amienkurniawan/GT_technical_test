<?php

namespace App\Http\Controllers;

use App\Models\Nilai_Peserta;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form-create-peserta', [
            'edit' => false
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'email' => 'required|unique:peserta|max:255',
                'nilai_x' => 'required|numeric|between:1,33',
                'nilai_y' => 'required|numeric|between:1,23',
                'nilai_z' => 'required|numeric|between:1,18',
                'nilai_w' => 'required|numeric|between:1,13',
                'photo' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi file photo
            ]);

            if ($validator->fails()) {
                return redirect('peserta/create')
                    ->withErrors($validator)
                    ->withInput();
            }

            // insert database
            // insert to peserta
            $peserta = new Peserta;
            $peserta->nama = $request->input('nama');
            $peserta->email = $request->input('email');
            // Proses upload dan simpan photo
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoPath = Storage::put('public/photos', $photo);
                $peserta->photo = $photoPath;
            }
            $peserta->save();

            // insert to nilai peserta
            $nilai_peserta = new Nilai_Peserta;
            $nilai_peserta->nilai_x = $request->input('nilai_x');
            $nilai_peserta->nilai_y = $request->input('nilai_y');
            $nilai_peserta->nilai_z = $request->input('nilai_z');
            $nilai_peserta->nilai_w = $request->input('nilai_w');
            $nilai_peserta->id_peserta = $peserta->id;
            $nilai_peserta->save();

            return redirect()->route('laporan.index')->with(['success' => 'Berhasil membuat data peserta baru']);;
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            return redirect()->route('laporan.index')->with(['error' => 'Gagal membuat data peserta baru']);;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_peserta = Peserta::with('nilai')->where('id', $id)->first();
        // return $data_peserta;
        return view('pages.form-create-peserta', [
            'data' => $data_peserta,
            'edit' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            //code...
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'email' => 'required|unique:peserta|max:255',
                'nilai_x' => 'required|numeric|between:1,33',
                'nilai_y' => 'required|numeric|between:1,23',
                'nilai_z' => 'required|numeric|between:1,18',
                'nilai_w' => 'required|numeric|between:1,13',
                'photo' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi file photo
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Ambil data pengguna berdasarkan ID
            $peserta = Peserta::find($id);
            if (!$peserta) {
                // Handle jika pengguna tidak ditemukan
                return redirect()->route('laporan.index')->with('error', 'Data peserta tidak ditemukan');
            }

            // update database
            // update data peserta
            $peserta->nama = $request->input('nama');
            $peserta->email = $request->input('email');
            // Proses upload dan simpan photo
            if ($request->hasFile('photo')) {
                $photo = $request->file('photo');
                $photoPath = Storage::put('public/photos', $photo);
                $peserta->photo = $photoPath;
            }
            $peserta->save();

            // Update nilai peserta
            Nilai_Peserta::where('id_peserta', $peserta->id)
                ->update([
                    'nilai_x' => $request->input('nilai_x'),
                    'nilai_y' => $request->input('nilai_y'),
                    'nilai_y' => $request->input('nilai_y'),
                    'nilai_z' => $request->input('nilai_z'),
                    'nilai_w' => $request->input('nilai_w'),
                    'id_peserta' => $peserta->id
                ]);

            return redirect()->route('laporan.index')->with('success', 'Berhasil mengubah data peserta');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            return redirect()->route('laporan.index')->with(['error' => 'Gagal mengubah data peserta']);;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
