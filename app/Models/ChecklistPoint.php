<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistPoint extends Model
{
    protected $table = 'checklist_points';

    protected $fillable = [
        'checklist_id',
        'point_id',
    ];
}
