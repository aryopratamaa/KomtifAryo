<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['Nama', 'tglmulai', 'tglselesai', 'Deskripsi', 'User_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
