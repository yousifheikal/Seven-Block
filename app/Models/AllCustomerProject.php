<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllCustomerProject extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'section',
        'user_id',
        'bedroom',
        'lounge',
        'saloon',
        'bathroom',
        'external',
    ];

    protected $table = 'all_customer_projects';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
