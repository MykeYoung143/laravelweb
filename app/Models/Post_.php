<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Ini nama pembuat website",
            "slug" => "judul-post-pertama",
            "author" => "Michael Alex",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero id libero eos temporibus. Ipsam voluptatibus doloremque natus, quis perferendis repellendus quidem ea deserunt dolorum blanditiis maiores saepe, beatae rerum nesciunt optio animi ut, asperiores veritatis adipisci aut officiis exercitationem. Id illo eaque deleniti asperiores ipsam placeat laborum aliquid debitis dolore! Pariatur, autem quo. Odio inventore unde porro magnam aut, ipsa similique distinctio quisquam. Recusandae voluptatibus officiis, explicabo corrupti veritatis velit sint aspernatur esse tempore quaerat iste, iusto praesentium modi amet."
        ],
        [
            "title" => "Ini nama pembuat kedua website",
            "slug" => "judul-post-kedua",
            "author" => "Dicky P",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut quidem dicta, voluptatem dolore odit ad recusandae unde voluptatibus ducimus aliquam repellendus officia suscipit id cupiditate eius nesciunt natus iusto voluptates accusantium. Voluptates ipsam eveniet eum ducimus earum explicabo molestiae eligendi sint voluptatem laudantium incidunt unde vitae inventore fugit voluptatum neque, facilis commodi repudiandae sequi saepe debitis atque nemo! Laudantium eaque illum natus nisi nobis animi quisquam libero eum? Repudiandae iusto ullam libero, sapiente temporibus sint mollitia. Velit corrupti enim culpa atque quibusdam officiis fuga, fugit reprehenderit officia temporibus at hic, nihil laudantium quasi exercitationem corporis nulla minus autem neque ab?"    ],
        ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}
