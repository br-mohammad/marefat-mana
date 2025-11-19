<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes';


    protected $fillable = [
        'level_id',
        'teacher_id',
        'title',
        'description',
        'start_time',
        'end_time',
    ];


    public function level()
    {
        return $this->belongsTo(Level::class);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot([
            'midterm_exam_score',
            'final_exam_score',
            'class_score'
        ])->withTimestamps();
    }
}
