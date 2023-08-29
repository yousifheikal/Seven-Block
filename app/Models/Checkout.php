<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'checkouts';

    protected $fillable = [
        'project_name',
        'project_price',
        'project_image',
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'country'
    ];
}
