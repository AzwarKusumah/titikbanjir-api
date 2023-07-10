<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahan';

    protected $primaryKey = 'id_kelurahan';
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
    public function titikBanjir()
    {
        return $this->hasMany(TitikBanjir::class, 'id_kelurahan');
    }

    public function titikPengungsian()
    {
        return $this->hasMany(TitikPengungsian::class, 'id_kelurahan');
    }
}