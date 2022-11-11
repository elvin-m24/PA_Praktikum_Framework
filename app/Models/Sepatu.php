<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    public function ModelSepatu() {
        return $this->belongsTo(ModelSepatu::class);
    }

    use HasFactory;
}
