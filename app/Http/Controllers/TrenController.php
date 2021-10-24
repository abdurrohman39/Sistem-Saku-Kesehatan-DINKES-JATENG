<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrenController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_tren = \App\tren::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_tren = \App\tren::all();
        }
        return view('tren.index', ['tren' => $data_tren]);
    }

    public function create(Request $request)
    {
        \App\Tren::create($request->all());
        return redirect('/tren')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $tren = \App\Tren::find($id);
        return view('tren/edit', ['tren' => $tren]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $tren = \App\Tren::find($id);
        $tren->update($request->all());
        return redirect('/tren')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $tren = \App\Tren::find($id);
        $tren->delete($tren);
        return redirect('/tren')->with('sukses', 'Data berhasil dihapus');
    }

     public function profile($id)
     {
        $tren = \App\Tren::find($id);
        $kasustahun = \App\Kasus::all();
        
        //menyiapkan data untuk chart
        $categories = [];
        $data = [];

        foreach($kasustahun as $kt){
            if($tren->kasus()->wherePivot('kasus_id',$kt->id)->first()){
                $categories[] = $kt->tahunn;
                $data[] = $tren->kasus()->wherePivot('kasus_id',$kt->id)->first()->pivot->jumlah; 
            }
        }
        //dd($data);
        //dd(json_encode($categories));

        return view('tren.profile',['tren' => $tren,'kasustahun' => $kasustahun,'categories' => $categories,'data' => $data]);
     }  
     
     public function addjumlah(Request $request,$idtren)
     {
        $tren = \App\Tren::find($idtren);
        if($tren->kasus()->where('kasus_id',$request->kasus)->exists()){
            return redirect('tren/'.$idtren.'/profile')->with('error','Data sudah ada');
        }
        $tren->kasus()->attach($request->kasus,['jumlah' => $request->jumlah]);

        return redirect('tren/'.$idtren.'/profile')->with('sukses','Data berhasil dimasiukan');
     }

     public function deletejumlah($idtren,$idkasus)
     {
        $tren = \App\Tren::find($idtren);
        $tren->kasus()->detach($idkasus);
        return redirect()->back()->with('sukses','Data berhasisl dihapus');
     }
}
