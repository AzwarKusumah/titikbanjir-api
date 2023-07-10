<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KecamatanController extends Controller
{
    public function index()
    {

        if (!Auth::guard('sanctum')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $kecamatanList = Kecamatan::with('Kelurahan')->get();

        $response = [
            'message' => 'Data Berhasil',
            'kecamatan_list' => [],
        ];

        foreach ($kecamatanList as $kecamatan) {
            $kecamatanData = [
                'id_kecamatan' => $kecamatan->id_kecamatan,
                'nama_kecamatan' => $kecamatan->nama_kecamatan,
                'deskripsi_kecamatan' => $kecamatan->deskripsi_kecamatan,
                'jumlah_penduduk' => [
                    'jumlah_penduduk_total' => $kecamatan->jumlah_penduduk_total,
                    'laki_laki' => $kecamatan->jumlah_penduduk_laki_laki,
                    'perempuan' => $kecamatan->jumlah_penduduk_perempuan,
                ],
                'daftar_kelurahan' => [],
            ];

            foreach ($kecamatan->kelurahan as $kelurahan) {
                $kelurahanData = [
                    'id_kelurahan' => $kelurahan->id_kelurahan,
                    'nama_kelurahan' => $kelurahan->nama_kelurahan,
                ];

                $kecamatanData['daftar_kelurahan'][] = $kelurahanData;
            }

            $response['kecamatan_list'][] = $kecamatanData;
        }
        return response()->json($response);
    }
}