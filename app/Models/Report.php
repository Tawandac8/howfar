<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function area(){
        return $this->belongsTo(Area::class);
    }

    /**
     *@return  User that reported
     */

     public function user(){
         return $this->belongsTo(User::class);
     }
}
