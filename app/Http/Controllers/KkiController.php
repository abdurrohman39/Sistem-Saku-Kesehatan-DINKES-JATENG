<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KkiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_kki = \App\Kki::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kki = \App\Kki::all();
        }
        return view('kki.index', ['data_kki' => $data_kki]);
    }

    public function create(Request $request)
    {

        //insrt ke table user
        $user = new \App\User;
        $user->role = 'kki';
        $user->name = $request->no_pegawai;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table siswa
        $request->request->add(['user_id' => $user->id]);
        $kki = \App\Kki::create($request->all());
        return redirect('/kki')->with('sukses', 'Data berhasil diinput');
    }
    public function edit($id)
    {
        $kki = \App\Kki::find($id);
        return view('kki/edit', ['kki' => $kki]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $kki = \App\Kki::find($id);
        $kki->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $kki->avatar =  $request->file('avatar')->getClientOriginalName();
            $kki->save();
        }
        return redirect('/kki')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $kki = \App\Kki::find($id);
        $kki->delete($kki);
        return redirect('/kki')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $kki = \App\Kki::find($id);
        return view('kki.profile', ['kki' => $kki]);
    }
}
