<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public const NAMA_OPTIONS = ['admin', 'guru', 'siswa kasir', 'siswa produksi'];

    protected $fillable = ['nama'];

    public static function namaOptions(): array
    {
        return self::NAMA_OPTIONS;
    }
}
