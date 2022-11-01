<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backgrounds extends Model
{
    use HasFactory;
    protected $teble = 'backgrounds';
    protected $fillable = ['detail','image'];
}