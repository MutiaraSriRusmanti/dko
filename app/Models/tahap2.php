<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahap2 extends Model
{
    use HasFactory;

    protected $table ="tahap_2";

    protected $fillable =[
        'nama_peserta',
        'nama_perusahaan',
        'jk',
        'skd',
        'file_bpjs'
    ];
}
