<?php

namespace App\Models\TimeEntry;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeEntry extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project',
        'task',
        'cost_type',
        'code_of_account',
        'Activity_location',
        'type',
        'days',
        'total',
        'shift'
    ] ;
}
