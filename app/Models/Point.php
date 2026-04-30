<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Point extends Model
{
    protected $fillable = ['section_id', 'name', 'description'];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
