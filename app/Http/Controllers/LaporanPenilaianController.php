<?php

namespace App\Http\Controllers;

use App\Models\Nilai_Peserta;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LaporanPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_nilai = Nilai_Peserta::with('peserta')->paginate(10);
        return view('pages.dashboard', [
            'data' => $data_nilai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $laporan_penilaian = Peserta::where('id', $id)->with('nilai')->first();

            // perhitungan Aspek Intelegensi 
            $nilai_intelegensi = ((0.4 * $laporan_penilaian->nilai->nilai_x) + (0.6 * $laporan_penilaian->nilai->nilai_y)) / 2;
            // lakukan normalisasi nilai 
            // Nilai_intelegensi_normalisasi = (nilai_intelegensi - Nilai_intelegensi_min) / (Nilai_intelegensi_max - Nilai_intelegensi_min)
            $nilai_intelegensi_normalisasi = ($nilai_intelegensi - 1) / (5 - 1);

            // Perhitungan Aspek Numerical Ability
            $nilai_numerical_ability = ((0.3 * $laporan_penilaian->nilai->nilai_z) + (0.7 * ($laporan_penilaian->nilai->nilai_w))) / 2;
            // Nilai_numerical_ability_normalisasi = (nilai_numerical_ability - Nilai_numerical_ability_min) / (Nilai_numerical_ability_max - Nilai_numerical_ability_min)
            $nilai_numerical_ability_normalisasi = ($nilai_numerical_ability - 1) / (5 - 1);

            $data_penilaian = [];

            array_push($data_penilaian, [
                'aspek' => 'Aspek Intelegensi',
                'nilai' => round($nilai_intelegensi_normalisasi)
            ]);

            array_push($data_penilaian, [
                'aspek' => 'Aspek Numerical Ability',
                'nilai' => round($nilai_numerical_ability_normalisasi)
            ]);

            $laporan_penilaian['penilaian'] = $data_penilaian;
            return view('pages.laporan', ['data' => $laporan_penilaian]);
        } catch (\Throwable $th) {
            Log::error([$th->getMessage()]);
            return redirect()->route('laporan.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //code...

            // Ambil data peserta berdasarkan ID
            $peserta = Peserta::find($id);
            if (!$peserta) {
                // Handle jika peserta tidak ditemukan
                return redirect()->back()->with('error', 'Data peserta tidak ditemukan.');
            }

            // Hapus foto jika ada
            if ($peserta->photo) {
                Storage::delete('photos/' . $peserta->photo);
            }

            // Hapus data peserta
            $peserta->delete();

            // Hapus data nilai
            $nilai_peserta = Nilai_Peserta::where('id_peserta', $peserta->id)->first();
            $nilai_peserta->delete();

            return redirect()->back()->with('success', 'Berhasil menghapus data peserta.');
        } catch (\Throwable $th) {

            Log::error([$th->getMessage()]);
            return redirect()->route('laporan.index');
        }
    }
}
