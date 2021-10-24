<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $fillable = ['wilayah'];

    public function umurhh()
    {
        return $this->belongsToMany(Umurhh::class)->withPivot(['angka']);
    }
}
