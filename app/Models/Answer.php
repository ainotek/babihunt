<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ["label", "text", "is_true", "question_id", "created_at", "updated_at"];
    public $timestamps = true;

}
