<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurhhController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_umurhh = \App\Umurhh::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_umurhh = \App\Umurhh::all();
        }
        return view('umurhh.index', ['umurhh' => $data_umurhh]);
    }

    public function create(Request $request)
    {
        \App\Umurhh::create($request->all());
        return redirect('/umurhh')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $umurhh = \App\Umurhh::find($id);
        return view('umurhh/edit', ['umurhh' => $umurhh]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $umurhh = \App\umurhh::find($id);
        $umurhh->update($request->all());
        return redirect('/umurhh')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $umurhh = \App\Umurhh::find($id);
        $umurhh->delete($umurhh);
        return redirect('/umurhh')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $umurhh = \App\Umurhh::find($id);
        $kotakabupaten = \App\Kota::all();

        //Menyiapkan data untuk chart
        $categories = [];
        $data = [];

        foreach ($kotakabupaten as $mp) {
            if($umurhh->kota()->wherePivot('kota_id',$mp->id)->first()){
            $categories[] = $mp->wilayah;
            $data[] = $umurhh->kota()->wherePivot('kota_id',$mp->id)->first()->pivot->angka;
            }
        }
        //dd($data);
        // dd(json_encode($categories));

        return view('umurhh.profile', ['umurhh' => $umurhh, 'kotakabupaten' => $kotakabupaten, 'categories' => $categories,'data' => $data]);
    }

    public function addangka(Request $request, $idumurhh)
    {
        $umurhh = \App\Umurhh::find($idumurhh);
        if ($umurhh->kota()->where('kota_id', $request->kota)->exists()) {
            return redirect('umurhh/' . $idumurhh . '/profile')->with('error', 'Data sudah ada.');
        }
        $umurhh->kota()->attach($request->kota, ['angka' => $request->angka]);
        return redirect('umurhh/' . $idumurhh . '/profile')->with('sukses', 'Data berhasil dimasukkan');
    }
    public function deletangka($idumurhh,$idkota)
    {
        $umurhh = \App\Umurhh::find($idumurhh);
        $umurhh->kota()->detach($idkota);
        return redirect()->back()->with('sukses','Data angka berhasil dihapus');
    }
}
