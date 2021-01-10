<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refuse extends Model
{
    use HasFactory;

    public function utilities(){
        return $this->belongsTo(Utilities::class);
    }
}
