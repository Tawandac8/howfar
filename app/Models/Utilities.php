<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function water(){
        return $this->hasMany(Water::class);
    }

    public function electricity(){
        return $this->hasMany(Electricity::class);
    }

    public function refuse(){
        return $this->hasMany(Refuse::class);
    }
}
