<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis';
    protected $fillable = ['fakultas_id', 'name'];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}