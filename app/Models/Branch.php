<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $fillable = ['organization_id', 'name', 'sname', 'address'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}