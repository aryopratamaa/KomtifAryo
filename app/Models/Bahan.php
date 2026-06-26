<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = "bahans";

    public const SATUAN_OPTIONS = ['kg', 'gr', 'pcs', 'liter'];

    protected $fillable = ['Nama', 'Satuan'];

    public static function satuanOptions(): array
    {
        return self::SATUAN_OPTIONS;
    }
}
