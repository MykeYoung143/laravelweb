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
            'name' => 'Michael Alex',
            'username' => "Alex143",
            'email' => 'michaelalex997@gmail.com',
            'password' => bcrypt('password')
        ]);

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

        Post::factory(20)->create();
        /*
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos, aliquam quae quaerat numquam, itaque id tenetur molestiae autem eaque odit impedit pariatur, vero doloribus doloremque placeat atque. Placeat ab laborum facere accusamus repudiandae excepturi itaque corporis, doloribus sapiente voluptates tenetur assumenda eligendi consectetur laudantium iusto fuga perspiciatis qui quas autem minima delectus. Libero nostrum perferendis consequatur nesciunt laudantium modi rerum itaque similique mollitia dolor porro ipsam, veritatis possimus dignissimos, cum, vitae sed adipisci cupiditate labore neque ducimus quasi?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos, aliquam quae quaerat numquam, itaque id tenetur molestiae autem eaque odit impedit pariatur, vero doloribus doloremque placeat atque. Placeat ab laborum facere accusamus repudiandae excepturi itaque corporis, doloribus sapiente voluptates tenetur assumenda eligendi consectetur laudantium iusto fuga perspiciatis qui quas autem minima delectus. Libero nostrum perferendis consequatur nesciunt laudantium modi rerum itaque similique mollitia dolor porro ipsam, veritatis possimus dignissimos, cum, vitae sed adipisci cupiditate labore neque ducimus quasi?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, unde quibusdam voluptate voluptatum recusandae expedita laudantium aliquam quidem rerum odio? Quidem qui sit quam animi iste ducimus veritatis natus excepturi eos, aliquam quae quaerat numquam, itaque id tenetur molestiae autem eaque odit impedit pariatur, vero doloribus doloremque placeat atque. Placeat ab laborum facere accusamus repudiandae excepturi itaque corporis, doloribus sapiente voluptates tenetur assumenda eligendi consectetur laudantium iusto fuga perspiciatis qui quas autem minima delectus. Libero nostrum perferendis consequatur nesciunt laudantium modi rerum itaque similique mollitia dolor porro ipsam, veritatis possimus dignissimos, cum, vitae sed adipisci cupiditate labore neque ducimus quasi?',
            'category_id' => 2,
            'user_id' => 1
        ]);*/
    }
}

//php artisan db:seed
//php artisan migrate:fresh --seed
//php artisan make:model Name -mfs (m=migrasi,f=factory,s=seeder)