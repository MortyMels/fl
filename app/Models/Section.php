<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class Section extends Model
{
    protected $fillable = ['name'];

    public function points() 
    {
        return $this->hasMany(Point::class, 'section_id');
    }
}
