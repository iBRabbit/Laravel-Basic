<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "First Blog",
            "author" => "Felix Prima",
            "slug" => "first-blog",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur non rerum ratione laudantium quibusdam omnis explicabo nam, magnam, saepe, esse accusantium repellendus qui numquam. Tenetur vel natus suscipit deleniti expedita doloremque distinctio quo esse provident! Ducimus quibusdam consectetur veniam perferendis voluptas aperiam porro magnam. Velit, saepe blanditiis sed impedit sapiente cum ducimus maiores temporibus. Ab excepturi quo laboriosam. Quaerat sequi eligendi eos adipisci, tempore unde nesciunt? Hic a eum molestias optio reiciendis doloremque expedita illo rerum? Fugit dolor minus laudantium exercitationem doloribus maxime soluta laborum? Natus totam inventore eum id ullam, rerum esse porro fugit, sint corrupti iure, repellat distinctio!"
        ], 

        [
            "title" => "Second Blog",
            "author" => "Udin Prima",
            "slug" => "second-blog",
            "body"  => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolor facilis provident vel? Mollitia impedit cumque veniam magnam necessitatibus dolorem rerum autem unde dolore, nihil sed, fuga, molestiae dicta maiores voluptates nulla temporibus explicabo nemo dolor. Iure, unde. Aliquid ipsa iure, voluptatum tenetur illo consequatur quasi voluptate tempore, recusandae perferendis sed, aperiam nulla quo magni. Ratione voluptatem officiis beatae, corrupti, dignissimos, consequatur blanditiis sunt iure fugit quia repellat aliquam dicta explicabo perferendis at necessitatibus molestiae atque porro architecto distinctio tempora veniam autem similique nulla? Necessitatibus explicabo error officia, repellat dicta voluptas distinctio modi accusantium ut blanditiis! Aspernatur culpa magnam accusamus corporis tempore quibusdam ex nisi distinctio quis aperiam recusandae sed eos, maiores consequuntur vitae similique officiis sint quaerat. Illum adipisci perspiciatis blanditiis, porro accusantium eveniet est corrupti quo sunt dolorum ut? Aliquam quo, sunt, minus illo eaque sed veniam autem hic quisquam ipsum labore dolores velit! Dignissimos deserunt nostrum id!"
        ],   

    ];

    public static function all() {
        return collect(self::$blog_posts); // static pake self :: sisanya $this ->
    }

    public static function find($slug) {
        $posts = static::all();

        // foreach(static::all() as $post) {
        //     if($slug == $post["slug"]) 
        //         $new_post = $post;
        // }

        return $posts -> firstWhere('slug', $slug); // cari semua data yang keynya $slug sama dengan 'slug' dari collection $posts
    }

}
