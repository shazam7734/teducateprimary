<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    use HasFactory;
    //This code will ensure that a survey result belongs to one user
    protected $guarded=[];
    public function user(){
         return $this->belongsTo(User::class);
    }
}