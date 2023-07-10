<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelurahanController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::guard('sanctum')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $kelurahanId = $request->query('id');
        $kelurahan = Kelurahan::with('titikBanjir', 'titikPengungsian')->find($kelurahanId);

        if (!$kelurahan) {
            return response()->json(['message' => 'Kelurahan not found'], 404);
        }

        $response = [
            'message' => 'Data Success',
            'kelurahan_list' => [
                [
                    'id_kelurahan' => $kelurahan->id_kelurahan,
                    'nama_kelurahan' => $kelurahan->nama_kelurahan,
                    'nama_kecamatan' => $kelurahan->kecamatan->nama_kecamatan,
                    'titik_banjir' => [],
                    'titik_pengungsian' => [],
                ],
            ],
        ];

        foreach ($kelurahan->titikBanjir as $titikBanjir) {
            $titikBanjirData = [
                'id_titik_banjir' => $titikBanjir->id_titik_banjir,
                'nama_titik' => $titikBanjir->nama_titik,
                'longitude' => $titikBanjir->longitude,
                'link_maps' => $titikBanjir->link_maps,
                'ketinggian_air' => $titikBanjir->ketinggian_air,
            ];

            $response['kelurahan_list'][0]['titik_banjir'][] = $titikBanjirData;
        }

        foreach ($kelurahan->titikPengungsian as $titikPengungsian) {
            $titikPengungsianData = [
                'id_titik_pengungsian' => $titikPengungsian->id_titik_pengungsian,
                'nama_pengungsian' => $titikPengungsian->nama_pengungsian,
                'jumlah_kepala_keluarga' => $titikPengungsian->jumlah_kepala_keluarga,
                'jumlah_orang_mengungsi' => $titikPengungsian->jumlah_orang_mengungsi,
                'longitude_pengungsian' => $titikPengungsian->longitude_pengungsian,
                'link_maps_pengungsian' => $titikPengungsian->link_maps_pengungsian,
            ];

            $response['kelurahan_list'][0]['titik_pengungsian'][] = $titikPengungsianData;
        }

        return response()->json($response);
    }
}