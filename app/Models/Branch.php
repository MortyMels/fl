<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Branch extends Model
{
    protected $fillable = ['organization_id', 'name', 'sname', 'address'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}