<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    protected $fillable = [
        'nama_pariwisata','alamat_pariwisata','detail_pariwisata','gambar_pariwisata','maps'
    ];
}
