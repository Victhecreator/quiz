<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    public function answers(){
        return $this->hasMany(Answer::class, "question_id", "question_id");
    }

    protected $hidden = ['created_at', 'updated_at'];
}
