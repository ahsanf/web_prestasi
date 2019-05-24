<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table = 'prestasi';
    protected $fillable = ['mahasiswa','predikat','tingkat','tahun','kegiatan'];
}
