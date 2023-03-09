<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "phone", "email", "image_path", "carrier", "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
