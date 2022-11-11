<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function Baju() {
        return $this->hasMany(Baju::class);
    }

    public function Celana() {
        return $this->hasMany(Celana::class);
    }

    public function Sepatu() {
        return $this->hasMany(Sepatu::class);
    }

    use HasFactory;
}
