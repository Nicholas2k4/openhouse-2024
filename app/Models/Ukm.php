<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $table = 'ukm';

    protected $fillable= [
        'name',
        'slug',
        'current_slot',
        'max_slot',
        'regist_fee',
    ];

    use HasFactory, HasUuids;

}
