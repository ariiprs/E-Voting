<?php

namespace App\Models;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'chairman',
        'vice_chairman',
        'vision',
        'mission',
        'sub_order',
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
