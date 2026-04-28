<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class Section extends Model
{
    protected $fillable = ['point_id', 'name'];

    public function points() 
    {
        return $this->hasMany(Point::class, 'point_id');
    }
}
