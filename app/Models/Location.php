<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    protected $fillable = ['branch_id', 'name', 'address'];
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
