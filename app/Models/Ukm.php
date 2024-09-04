<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasUuids, HasFactory;

    protected $table = 'ukms';

    protected $fillable = [
        'name',
        'slug',
        'current_slot',
        'max_slot',
        'regist_fee',
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'detail_registrations', 'ukm_id', 'nrp', 'id', 'nrp');
    }
}
