<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Student extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory;

    protected $table = 'students';


    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'email',
        'password',
    ];

    protected function casts()
    {
        return [
            'password' => 'hashed'
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }


    protected $hidden = [
        'password',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function classes()
    {
        return $this->belongsToMany(
            ClassModel::class,
            'class_student',
            'student_id',
            'class_id'
        )->withPivot([
            'midterm_exam_score',
            'final_exam_score',
            'class_score'
        ])->withTimestamps();
    }
}
