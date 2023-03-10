<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        User::create([
            'name'=> 'Bagasap',
            'username' =>'bagasap',
            'email' => 'bagasap@gmail.com',
            'password' => bcrypt('12345')

        ]);
        // User::create([
        //     'name'=> 'Sigit',
        //     'email' => 'thezigit@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);
        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda nemo molestias, magnam maiores exercitationem! Quae, quos quod. Magni amet rem explicabo incidunt fugiat quidem officiis autem at temporibus, accusamus optio ex nulla cum, libero, voluptatum dolores reprehenderit aliquam similique aliquid sunt sit eius iste. Autem facere adipisci officia, laboriosam voluptate, veniam, sapiente laborum beatae dolores asperiores itaque? Minima unde hic qui eveniet ad architecto error distinctio sequi deserunt vero, quos voluptate sunt, minus sed omnis aliquid inventore aliquam amet nam eum! Eligendi, sit. Iure, natus quaerat! Ea numquam quaerat placeat ratione fuga nihil delectus laboriosam explicabo?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda nemo molestias, magnam maiores exercitationem! Quae, quos quod. Magni amet rem explicabo incidunt fugiat quidem officiis autem at temporibus, accusamus optio ex nulla cum, libero, voluptatum dolores reprehenderit aliquam similique aliquid sunt sit eius iste. Autem facere adipisci officia, laboriosam voluptate, veniam, sapiente laborum beatae dolores asperiores itaque? Minima unde hic qui eveniet ad architecto error distinctio sequi deserunt vero, quos voluptate sunt, minus sed omnis aliquid inventore aliquam amet nam eum! Eligendi, sit. Iure, natus quaerat! Ea numquam quaerat placeat ratione fuga nihil delectus laboriosam explicabo?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda nemo molestias, magnam maiores exercitationem! Quae, quos quod. Magni amet rem explicabo incidunt fugiat quidem officiis autem at temporibus, accusamus optio ex nulla cum, libero, voluptatum dolores reprehenderit aliquam similique aliquid sunt sit eius iste. Autem facere adipisci officia, laboriosam voluptate, veniam, sapiente laborum beatae dolores asperiores itaque? Minima unde hic qui eveniet ad architecto error distinctio sequi deserunt vero, quos voluptate sunt, minus sed omnis aliquid inventore aliquam amet nam eum! Eligendi, sit. Iure, natus quaerat! Ea numquam quaerat placeat ratione fuga nihil delectus laboriosam explicabo?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda',
        //     'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo repudiandae eligendi assumenda nemo molestias, magnam maiores exercitationem! Quae, quos quod. Magni amet rem explicabo incidunt fugiat quidem officiis autem at temporibus, accusamus optio ex nulla cum, libero, voluptatum dolores reprehenderit aliquam similique aliquid sunt sit eius iste. Autem facere adipisci officia, laboriosam voluptate, veniam, sapiente laborum beatae dolores asperiores itaque? Minima unde hic qui eveniet ad architecto error distinctio sequi deserunt vero, quos voluptate sunt, minus sed omnis aliquid inventore aliquam amet nam eum! Eligendi, sit. Iure, natus quaerat! Ea numquam quaerat placeat ratione fuga nihil delectus laboriosam explicabo?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        Post::factory(20)->create();
    }
}
