<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChecklistPoint extends Model
{
    protected $fillable = ['checklist_section_id', 'requirement', 'description'];

    public function checklistsection()
    {
        return $this->belongsTo(ChecklistSection::class, 'checklist_section_id');
    }
}
