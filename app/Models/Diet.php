<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    public function client() // Relación de muchos a uno
    {
        return $this->belongsTo(Client::class);
    }
}
