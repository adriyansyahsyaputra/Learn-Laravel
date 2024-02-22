<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adriyansyah Syaputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia totam nihil tempora odio non assumenda magni porro, eaque voluptatum voluptates aspernatur similique nulla aliquam, reprehenderit ipsum temporibus, ipsa maxime. Vel veritatis fugiat sapiente odit, illum minus sunt error accusamus natus, deleniti cum quaerat molestias nobis explicabo vitae saepe inventore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syaputra Adriyansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quia eaque ea veniam quisquam officia ad earum fuga? Sint rem recusandae rerum placeat deleniti dolores, modi sunt, fugit, officia labore voluptatem ullam nemo nesciunt aut. Quasi aliquam laudantium praesentium deleniti deserunt laborum blanditiis doloremque atque vero tempora enim suscipit illo, aspernatur ea iste quidem aliquid incidunt nisi possimus repellat rem qui ab! Voluptas autem, minus id consectetur quod repellendus quos!
            "
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

    }
}
