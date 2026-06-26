<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produks";
    protected $fillable = ['Kat_id', 'Nama', 'Harga_modal', 'Harga_jual'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'Kat_id');
    }
}
