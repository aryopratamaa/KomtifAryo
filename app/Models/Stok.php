<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = "stoks";
    protected $fillable = ['bahan_id', 'Stoknow', 'Stokmin'];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class, 'bahan_id');
    }
}
