<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entity extends Model
{
    protected $fillable = ['entity_section_id', 'location_id', 'name', 'desctiption'];

    public function entitysection()
    {
        return $this->belongsTo(EntitySection::class, 'entity_section_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
