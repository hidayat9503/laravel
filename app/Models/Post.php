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
    protected $with = ['categories', 'author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')->orwhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['categories'] ?? false, function ($query, $categories) {
            return $query->whereHas('categories', function ($query) use ($categories) {
                $query->where('slug', $categories);
            });
        });
    }

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
