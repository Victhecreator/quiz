<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswers extends Model
{
    use HasFactory;

    protected $table = 'exam_answers';
    protected $fillable = ['exam_id','question_id'];
}
