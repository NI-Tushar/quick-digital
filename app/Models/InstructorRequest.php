<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorRequest extends Model
{
    use HasFactory;

     protected $fillable = ['user_id', 'is_approved'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
