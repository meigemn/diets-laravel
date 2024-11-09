<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function diets()//tabla diets
    {
        return $this->hasMany(Diet::class);//relacionamos con el modelo Diet. 1-muchas
    }
}
