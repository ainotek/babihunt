<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserAnswer extends Pivot
{
    protected $table = 'user_answers';
}
