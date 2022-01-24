<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahap1 extends Model
{
    use HasFactory;
    protected $table = "tahap_1";
     protected $fillable = [
       'id',
       'nama_peserta',
       'jk',
       'thn_lahir',
       'nama_perusahaan',
       'wilayah',
       'no_tlp',
       'tgl_kecelakaan',
       'tempat_kejadian',
       'unsur_penyebab',
       'uraian_kecelakaan',
       'skd',
       //'berkas_bpjs',
       'unggah_poto',
       'email'
     ];
}
