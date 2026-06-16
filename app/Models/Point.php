<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Point extends Model
{
    protected $fillable = ['section_id', 'name', 'description'];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function checklists(): BelongsToMany
    {
        return $this->belongsToMany(Checklist::class, 'checklist_points')->withTimestamps();
    }
}
