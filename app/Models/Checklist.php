<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class checklist extends Model
{
    protected $fillable = ['description', 'name'];

    // public function points(){

    // }
    
    // public function audits()
    // {
    //     return $this->hasMany(Audit::class);
    // }
}