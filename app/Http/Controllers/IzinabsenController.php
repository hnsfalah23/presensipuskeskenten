<?php

namespace App\Http\Controllers;

class IzinabsenController extends Controller
{
    public function create(){
        return view('izin.create');
    }

    // public function store (Request $request)
    // {   
    //     $nip = Auth::guard('karyawan')->user()->nip;
    //     $tgl_izin_dari = $request->tgl_izin_dari;
    //     $tgl_izin_sampai = $request->tgl_izin_sampai;
    //     $status = "i";
    //     $keterangan = $request->keterangan;

    //     $data = [
    //         'nip' => $nip,
    //         'tgl_izin_dari' => $tgl_izin_dari,
    //         'tgl_izin_sampai' => $tgl_izin_sampai,
    //         'status' => $status,
    //         'keterangan' => $keterangan,
    //     ];

    //     $simpan = DB::table('pengajuan_izin')->insert($data);

    //     if ($simpan) {
    //         return redirect('/presensi/izin')->with(['success'=>'Data Berhasil Disimpan']);
    //     }else {
    //         return redirect('/presensi/izin')->with(['error'=>'Data Gagal Disimpan']);
    //     }        
    // }
}
