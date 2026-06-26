<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produks";
    protected $fillable = ['Kat_id', 'Nama', 'harga_modal', 'harga_jual'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'Kat_id');
    }
}
