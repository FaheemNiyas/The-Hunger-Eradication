<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends BaseModel
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'item1', 'item2', 'item3'];
}
