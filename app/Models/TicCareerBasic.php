<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicCareerBasic extends Model
{
    use HasFactory;
    protected $table = 'tic_career_basic';
    protected $guarded = [];
    public $timestamps = false;
}
