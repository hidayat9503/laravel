<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\MassAssignmentException;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
}
