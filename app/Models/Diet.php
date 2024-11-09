<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    public function clients()//tabla clients
    {
        return $this->belongsTo(Client::class);//relacion 1-1
    }
}
