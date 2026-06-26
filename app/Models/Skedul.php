<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skedul extends Model
{
    protected $table = "skeduls";
    protected $fillable = ['User_id', 'tgltugas', 'shift', 'Role_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'Role_id');
    }
}
