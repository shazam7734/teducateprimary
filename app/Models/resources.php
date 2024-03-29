<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resources extends Model
{
    use HasFactory;

    //This code is for retreiving data from the survey table
    protected $table = "resources";
    protected $fillable = ["key_stage", "year", "curriculum_point", "value", "name", "tutorial1", "tutorial2", "tutorial3", "primary_instructions", "secondary_instructions", "lesson", "feedback", "share"];

}
