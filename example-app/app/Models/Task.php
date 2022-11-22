<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

//    public static function completed()
//    {
//        return static::where('completed', 1)->get();
//    }
    public function scopeIncompleted($query)
    {
        return $query->where('completed', 0);
    }
}
