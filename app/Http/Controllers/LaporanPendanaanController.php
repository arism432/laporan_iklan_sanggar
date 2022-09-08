<?php

namespace App\Http\Controllers;
use App\Models\LaporanPendanaan;
use Illuminate\Http\Request;

class LaporanPendanaanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pendanaan = LaporanPendanaan::all();
        return view('admin.pendanaan.index', compact('pendanaan'));
    }

    public function create(){
        return view('admin.pendanaan.create');
    }

    public function store(Request $request){
        try{
            $data = [
                'daftar_ads' => $request->daftarAds,
                'tanggal_cek_saldo' => $request->tanggalCekSaldo,
                'jam_cek_saldo' => $request->jamCekSaldo,
                'jumlah_saldo' => $request->jumlahSaldo,
                'tanggal_topup' => $request->tanggalTopup,
                'jam_topup' => $request->jamTopup,
                'jumlah_topup' => $request->jumlahTopup,
                'jumlah_setelah_topup' => $request->jumlahSetelahTopup,
                'status_iklan' => $request->statusIklan,
                'keterangan' => $request->keterangan
            ];
            $sukses = LaporanPendanaan::create($data);
            if($sukses){
                return redirect()->route('pendanaan.index');
            }
        }catch(\Exception $err){
            return response([
                'status' => false,
                'message' =>$err->getMessage()
            ],500);
        }
    }

    public function edit($id){
        $pendanaan = LaporanPendanaan::findOrFail($id);
       
        return view('admin.pendanaan.edit', compact('pendanaan','id'));
    }

    public function update(Request $request, $id){
        try {
           $dt = LaporanPendanaan::findOrFail($id);
           $dt->daftar_ads = $request->input('daftarAds');
           $dt->tanggal_cek_saldo = $request->input('tanggalCekSaldo');
           $dt->jam_cek_saldo = $request->input('jamCekSaldo');
           $dt->jumlah_saldo = $request->input('jumlahSaldo');
           $dt->tanggal_topup = $request->input('tanggalTopup');
           $dt->jam_topup = $request->input('jamTopup');
           $dt->jumlah_topup = $request->input('jumlahTopup');
           $dt->jumlah_setelah_topup = $request->input('jumlahSetelahTopup');
           $dt->status_iklan = $request->input('statusIklan');
           $dt-> keterangan = $request->input('keterangan');
           $updateData = $dt->save();
           if($updateData){
            return redirect()->route('pendanaan.index');
           }
           return redirect()->back()->with('error','cek  lagi');
        } catch (\Exception $err){
            return response([
                'status' => false,
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        LaporanPendanaan::findOrFail($id)->delete();
        return redirect()->back();
    }
    
}

