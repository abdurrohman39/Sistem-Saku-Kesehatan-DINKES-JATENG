<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kki extends Model
{
    protected $table = 'kki';
    protected $fillable = ['no_pegawai', 'nama',  'jabatan', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->avatar);
    }
}
