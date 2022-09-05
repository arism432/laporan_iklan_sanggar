<?php

namespace App\Http\Controllers;
use App\Models\DataIklan;
use Illuminate\Http\Request;

class DataIklanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $iklan = DataIklan::all();
        return view('admin.iklan.index', compact('iklan'));
    }

    public function create(){
        return view('admin.iklan.create');
    }

    public function store(Request $request){
        try{

            $data = [
                'daftar_ads' => $request->daftarAds,
                'reach' => $request->reach,
                'amount_spent' => $request->amountSpent,
                'cpm' =>  $request->cpm,
                'ctrl_all' => $request->ctrl_all,
                'cost_per_outbound_click' => $request->costPerOutboundClick,
                'outbound_click' => $request->outboundClick,
                'messaging_conversation' => $request->messaging_conversation
            ];

            // Validasinya jangan disini , di Folder Request aja

            $sukses = DataIklan::create($validasi);
            if($sukses){
                return redirect()->route('iklan.index');
            }
        }catch(\Exception $err){
             return response([
                'status' => false,
                'message'=>$err->getMessage()
            ],500);
        }
    }

    public function edit($id){
        $iklan = DataIklan::findOrFail($id);
        return view('admin.iklan.index', compact('iklan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'daftar_ads' => 'required|max:15',
            'reach' => 'required',
            'amount_spent' => 'required',
            'cpm' =>  'required',
            'ctrl_all' => 'required',
            'cost_per_outbound_click' => 'required',
            'outbound_click' => 'required',
            'massaging_conversation' => 'required'
        ]);
        DataIklan::findOrFail($id)->update([
            'daftar_ads' => $request->daftarAds,
            'reach'=> $request->reach,
            'amount_spent' => $request->amountSpent,
            'cpm' => $request->cpm,
            'cost_per_outbound_click' => $request->costPerOutboundClick,
            'outbound_click' => $request->outboundClick,
            'massaging_conversation' => $request->messagingConversation,
        ]);
        return redirect()->route('iklan.index');
    }

    public function destroy($id){
        DataIklan::findOrFail($id)->delete();
        return redirect()->back();
    }
}
