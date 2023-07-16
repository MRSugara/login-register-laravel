<?php

namespace App\Models;


class Post
{
    static $blog_posts =
    [
        [
            "judul" => "Kegiatan Gathering",
            "slug" => "kegiatan-gathering",
            "dokumentasi" => "Felix Zeboath",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, porro molestias ratione atque tempora at! Recusandae nulla repudiandae, odio iusto doloribus quia id dolor veniam alias, dolorem optio debitis atque fuga. Quas fuga officiis a, porro ab iusto molestiae vitae iure, vel quam quae ullam, quo temporibus doloremque atque aliquid eum odit corrupti adipisci quaerat consequuntur harum ipsum? Ut laborum harum debitis iste molestias et reprehenderit repellat, nihil ab quasi, magnam minus nobis, quas dolor maiores obcaecati at? Dignissimos omnis, fugit nihil inventore iste harum magnam. At hic ex quas dolorum necessitatibus, natus in corporis reprehenderit itaque iusto ipsum quisquam."
        ],
        [
            "judul" => "Sertifikasi BNSP",
            "slug" => "sertifikasi-bnsp",
            "dokumentasi" => "Zainal Saputra",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, porro molestias ratione atque tempora at! Recusandae nulla repudiandae, odio iusto doloribus quia id dolor veniam alias, dolorem optio debitis atque fuga. Quas fuga officiis a, porro ab iusto molestiae vitae iure, vel quam quae ullam, quo temporibus doloremque atque aliquid eum odit corrupti adipisci quaerat consequuntur harum ipsum? Ut laborum harum debitis iste molestias et reprehenderit repellat, nihil ab quasi, magnam minus nobis, quas dolor maiores obcaecati at? Dignissimos omnis, fugit nihil inventore iste harum magnam. At hic ex quas dolorum necessitatibus, natus in corporis reprehenderit itaque iusto ipsum quisquam.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos unde aspernatur harum inventore esse quisquam nulla enim adipisci, sint impedit maxime voluptatem dicta ex reprehenderit cupiditate praesentium rem! Ipsam officia omnis eveniet rerum!"
        ]
    ];
    public static function all()
    {
        return self::$blog_posts;
    }
}
