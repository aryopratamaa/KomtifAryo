<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skedul extends Model
{
    protected $table = "skeduls";
    protected $fillable = ['user_id', 'tgltugas', 'shift', 'role_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
