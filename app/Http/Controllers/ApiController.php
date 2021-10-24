<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editangka(Request $request, $id)
    {
        $umurhh = \App\Umurhh::find($id);
        $umurhh->kota()->updateExistingPivot($request->pk,['angka' => $request->value]);
    }

    public function editjumlah(Request $request, $id)
    {
        $tren = \App\Tren::find($id);
        $tren->kasus()->updateExistingPivot($request->pk,['jumlah' =>$request->value]);
    }
}
