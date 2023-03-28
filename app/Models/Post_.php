<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'author' => 'Taufik Hidayat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat architecto error illum quisquam quia dignissimos illo soluta, ipsam sunt dolor, nulla facilis nostrum tempore ab suscipit! Adipisci, voluptates. Esse iusto corrupti, illo impedit harum ipsam non minus ratione laboriosam, ad, ducimus facere reprehenderit porro magnam iste quas commodi labore sit.'
        ],
        [
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'author' => 'Wiwik Lestari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat architecto error illum quisquam quia dignissimos illo soluta, ipsam sunt dolor, nulla facilis nostrum tempore ab suscipit! Adipisci, voluptates. Esse iusto corrupti, illo impedit harum ipsam non minus ratione laboriosam, ad, ducimus facere reprehenderit porro magnam iste quas commodi labore sit.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
