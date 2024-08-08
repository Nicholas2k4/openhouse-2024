<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukms extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'current_slot',
        'max_slot',
        'regist_fee',
        'description',
    ];
}
