<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'levels';

    protected $fillable = [
        'title',
        'requirement_id',
    ];

    public function requirement()
    {
        return $this->belongsTo(Level::class, 'requirement_id');
    }


    public function nextLevels()
    {
        return $this->hasMany(Level::class, 'requirement_id');
    }


    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'level_id');
    }
}
