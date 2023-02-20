<?php

namespace App\Models;



class Post 
{
 private static $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Bagasap',
            'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos accusantium totam necessitatibus, molestias ipsa laboriosam eaque debitis deserunt odit. Delectus et hic nam dolores perferendis praesentium quod facere mollitia eius.'
        ],
        [
            'title' => 'Judul Kedua Bagasap',
             'slug' => 'judul-post-kedua',
            'author' => 'Adityap',
            'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos accusantium totam necessitatibus, molestias ipsa laboriosam eaque debitis deserunt odit. Delectus et hic nam dolores perferendis praesentium quod facere mollitia eius.'
        ]
        ];
        public static function all(){
            return collect(self::$blog_posts);
        }
        public static function find($slug ){
            $posts = static::all();
            // $post = [];
            //     foreach ($posts as $p) {
            //     if($p['slug'] === $slug){
            //     $post = $p;       
            //         }
            //     }
            return $posts->firstWhere('slug',$slug);
        }
}
