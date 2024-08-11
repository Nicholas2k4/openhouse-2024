<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGame extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'ukm_id',
        'nrp',
        'letter',
        'letter_index',
    ];
}
