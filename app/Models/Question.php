<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;      // importando User
use App\Models\Question;  // importando Question

class UserQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'question_id', 'correct'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
