<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consent extends Model
{
    protected $fillable = [
        'consent_text',
        'status',
        'version',
        'created_by',
    ];

    public function setActive()
    {
        DB::transaction(function () {
            // Deactivate all existing active records in the table
            self::where('status', 'active')->update(['status' => 'deactive']);

            // Activate the current record
            $this->status = 'active';
            $this->save();
        });
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
