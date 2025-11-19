<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    use HasFactory;

    protected $table = 'class_student';

    protected $fillable = [
        'class_id',
        'student_id',
        'midterm_exam_score',
        'final_exam_score',
        'class_score',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
