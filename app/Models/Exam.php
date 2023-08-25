<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable =['user_id','exam_id'];
    protected $table ="exam_info";

    public function scores(){
        return $this->hasMany(ExamAnswers::class, 'exam_id','exam_id');
    }
}
