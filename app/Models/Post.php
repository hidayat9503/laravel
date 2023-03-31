<?php

namespace App\Models;

// use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\MassAssignmentException;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
