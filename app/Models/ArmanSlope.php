<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmanSlope extends Model
{
    use HasFactory;
    protected $fillable = ['arman_id','name','description', 'location','image','date'

    ];
}
