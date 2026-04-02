<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class Organization extends Model
{
    protected $fillable = ['name', 'sname', 'tin'];

    public function branches() 
    {
        return $this->hasMany(Branch::class);
    }
}
