<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class ChecklistSection extends Model
{
    protected $fillable = ['name'];

    public function checklistpoints() 
    {
        return $this->hasMany(ChecklistPoint::class);
    }
}
