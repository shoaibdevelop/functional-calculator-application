<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculationHistory extends Model
{
    use HasFactory;
    protected $fillable = ['expression', 'result'];
}
