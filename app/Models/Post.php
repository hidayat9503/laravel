<?php

namespace App\Models;

// use App\Models\Categories;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
// use Illuminate\Database\Eloquent\MassAssignmentException;

class Post extends Model
{
    use HasFactory, Sluggable;
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

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
        $query->whereHas('author', fn ($query)  =>
        $query->where('username', $author)));
    }

    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
