<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    function questions() {
        return $this->hasMany(Question::class);
    }

    function creator() {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
