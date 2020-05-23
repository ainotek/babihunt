<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserReward extends Pivot
{
    protected $table = 'user_rewards';

}
