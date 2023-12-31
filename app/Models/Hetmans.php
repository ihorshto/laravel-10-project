<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hetmans extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'years_of_reign', 'description', 'point'];

}
