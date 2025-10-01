<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentPhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'phone_number',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
