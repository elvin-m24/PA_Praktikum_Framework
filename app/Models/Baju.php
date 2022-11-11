<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    public function ModelBaju() {
        return $this->belongsTo(ModelBaju::class);
    }

    public function Supplier() {
        return $this->belongsTo(Supplier::class);
    }


    use HasFactory;
}
