<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class commentDesign extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user',
        'comment',

    ];

    protected $table = 'comment_designs';

    public function project(){
        return $this->belongsTo(AllCustomerProject::class, 'project_id');
    }
}
