<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JenisBansos;
use App\Models\ValidasiData;
use App\Models\User;

class DataBansos extends Model
{
    use HasFactory;
    protected $table = 'databansos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nik',
        'NoKK',
        'Nama',
        'Tempat_Lahir', 
        'Tgl_Lahir',
        'Jenis_Kelamin',
        'Alamat', 
        'RT',
        'RW',
        'Kelurahan', 
        'Kecamatan', 
        'Kabupaten', 
        'Provinsi', 
        'NoHP', 
        'Pekerjaan', 
        'Penghasilan',
        'fotoKtp',
        'swaFoto',
        'fotoSktm',
        'Jenis_Bansos',
    ];

    public function jenisbansos(){
        return $this->belongsTo(JenisBansos::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function validasidata(){
        return $this->hasMany(ValidasiData::class);
    }
}
