<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    public function detailtransaksi()
    {
        return $this->hasMany(detailtransaksi::class,'transaksi_id');
    }
}
