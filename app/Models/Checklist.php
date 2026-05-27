<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class checklist extends Model
{
    protected $fillable = ['description', 'name'];

    public function points()
    {
        return $this->belongsToMany(Point::class, 'checklist_points');
    }
}