<?php

namespace App\Http\Controllers;

use App\Models\DataIklan;
use App\Http\Requests\IklanRequest;
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

    public function store(request $request){
        try{
            $data = [
                'daftar_ads' => $request->daftarAds,
                'reach' => $request->reach,
                'amount_spent' => $request->amountSpent,
                'cpm' =>  $request->cpm,
                'ctrl_all' => $request->ctrlAll,
                'cost_per_outbound_click' => $request->costPerOutboundClick,
                'outbound_click' => $request->outboundClick,
                'messaging_conversation' => $request->messagingConversation
            ];

            $sukses = DataIklan::create($data);
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
        return view('admin.iklan.edit', compact('iklan', 'id'));
    }

    public function update(Request $request, $id){
        try {
            $dt = DataIklan::findOrFail($id);
            $dt->daftar_ads = $request->input('daftarAds');
            $dt->reach = $request->input('reach');
            $dt->amount_spent = $request->input('amountSpent');
            $dt->cpm = $request->input('cpm');
            $dt->ctrl_all = $request->input('ctrlAll');
            $dt->cost_per_outbound_click = $request->input('costPerOutboundClick');
            $dt->outbound_click =  $request->input('outboundClick');
            $dt->messaging_conversation = $request->input('messagingConversation');
            $updateData = $dt->save();
            if($updateData){
                return redirect()->route('iklan.index');
            }
            return redirect()->back()->with('error', 'cek lagi');
        } catch (\Exception $err){
            return response([
                'status' => false,
                'message' => $err->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        DataIklan::findOrFail($id)->delete();
        return redirect()->back();
    }
}
