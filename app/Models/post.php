<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable =[
        "patient_name",
        "phone",
        "app_date",
        "email",
        "doctor_name",
        "status",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
