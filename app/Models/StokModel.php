<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class StokModel extends Model
{
    protected $table = 't_stok';
    protected $primaryKey = 'stok_id';
    
    protected $fillable = ['stok_tanggal', 'stok_jumlah'];

    public function barang(): HasMany{
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }

    public function user(): HasMany{
        return $this->hasMany(userModel::class, 'user_id', 'user_id');
    }
}
