<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicCareerTermCondition extends Model
{
    use HasFactory;
    protected $table = 'tic_career_term_condition';
    protected $guarded = [];
    public $timestamps = false;
}
