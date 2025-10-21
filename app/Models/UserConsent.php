<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserConsent extends Model
{
    protected $fillable = [
        'guid',
        'accepted_at',
        'version',
    ];
}
