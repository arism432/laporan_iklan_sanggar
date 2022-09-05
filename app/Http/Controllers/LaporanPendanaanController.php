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
        $request->validate([
            'daftar_ads' => 'required|max:15',
            'tanggal_cek_saldo' => 'required',
            'jam_cek_saldo' => 'required',
            'jumlah_saldo' => 'required',
            'tanggal_topup'=> 'required',
            'jam_topup' => 'required',
            'jumlah_topup' => 'required',
            'jumlah_setelah_topup' => 'required',
            'status_iklan' => 'required|max:20',
            'keterangan' => 'required|max:255'
        ]);
        LaporanPendanaan::create($request->all());
        return redirect()->route('pendanaan.index');
    }

    public function edit($id){
        $pendanaan = LaporanPendanaan::findOrFail($id);
        return view('admin.pendanaan.index', compact('pendanaan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'daftar_ads' => 'required|max:15',
            'tanggal_cek_saldo' => 'required',
            'jam_cek_saldo' => 'required',
            'jumlah_saldo' => 'required',
            'tanggal_topup'=> 'required',
            'jam_topup' => 'required',
            'jumlah_topup' => 'required',
            'jumlah_setelah_topup' => 'required',
            'status_iklan' => 'required|max:20',
            'keterangan' => 'required|max:255'
        ]);
        LaporanPendanaan::findOrFail($id)->update([
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
        ]);
        return redirect()->route('pendanaan.index');
    }

    public function destroy($id){
        Project::findOrFail($id)->delete();
        return redirect()->back();
    }
    
}

