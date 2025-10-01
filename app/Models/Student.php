<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    protected $fillable = [
        'sponsor_no',
        'photo_path',
        'student_id',
        'dropped_out',
        'name',
        'gender',
        'class',
        'roll',
        'weight',
        'height',
        'birth_date',
        'father_name',
        'mother_name',
        'father_occupation',
        'mother_occupation',
        'family_members',
        'other_guardian',
        'permanent_address',
        'present_address',
    ];

    // Automatically include this in API JSON
    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute()
    {
        if (!$this->photo_path) return null;

        // If you store files on public disk:
        return Storage::disk('public')->url($this->photo_path);

        // If you want signed URLs (private disk / Filament default):
        // return Storage::disk('public')->temporaryUrl(
        //     $this->photo_path,
        //     now()->addMinutes(60)
        // );
    }

    public function phoneNumbers(): HasMany
    {
        return $this->hasMany(StudentPhoneNumber::class);
    }
}
