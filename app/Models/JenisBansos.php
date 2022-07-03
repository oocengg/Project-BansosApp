<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataBansos;

class JenisBansos extends Model
{
    use HasFactory;
    protected $table = 'jenisbansos';
    protected $fillable = [
        'nama_bansos',
    ];
    public function databansos(){
        return $this->hasMany(DataBansos::class);
    }
}
