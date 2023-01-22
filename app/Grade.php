<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function inspection() {
        return $this->belongsTo(Inspection::class);
    }

    public function component() {
        return $this->belongsTo(Component::class);
    }

    public function gradeType() {
        return $this->belongsTo(GradeType::class);
    }
}
