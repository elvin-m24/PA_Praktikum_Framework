<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celana extends Model
{
    public function ModelCelana() {
        return $this->belongsTo(ModelCelana::class);
    }

    public function Supplier() {
        return $this->belongsTo(Supplier::class);
    }

    use HasFactory;
}
