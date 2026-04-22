<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class EntitySection extends Model
{
    protected $fillable = ['name', 'description', 'is_public'];

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
