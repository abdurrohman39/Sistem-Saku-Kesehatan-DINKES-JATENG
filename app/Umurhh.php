<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umurhh extends Model
{
    protected $table = 'umurhh';
    protected $fillable = ['kategori', 'jumlah', 'avatar'];

    public function kota()
    {
        return $this->belongsToMany(Kota::class)->withPivot(['angka'])->withTimeStamps();
    }
}
