<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataBansos;
use App\Models\User;

class ValidasiData extends Model
{
    use HasFactory;
    protected $table = 'validasi_data';
    protected $fillable = [
        'databansos_id',
        'status',
        'proses',
    ];

    public function databansos(){
        return $this->belongsTo(DataBansos::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
