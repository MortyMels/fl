<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Checklist extends Model
{
    protected $fillable = ['description', 'name'];

    public function points(): BelongsToMany
    {
        return $this->belongsToMany(Point::class, 'checklist_points')->withTimestamps();
    }
}