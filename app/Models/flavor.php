<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flavor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ingredients', 'value', 'preparation_time'];
}
