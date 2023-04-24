<?php

namespace App\Laravue\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoletaOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'option', 'isActive', 'result'
    ];
}
