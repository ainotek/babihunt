<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserQuiz extends Pivot
{
    protected $table = 'user_quizzes';

}
