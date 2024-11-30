<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Johan',
            'username' => 'johan',
            'email' => 'johan@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Dody',
        //     'email' => 'dody@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);


        User::factory(3)->create();



        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea. Beatae tempore voluptatem ducimus in quis laboriosam vero eveniet labore, et asperiores tenetur itaque maiores iusto ut dolorum cum eaque culpa repellendus a quo deserunt reprehenderit praesentium assumenda laudantium! Et a nulla suscipit illum repellendus, ipsum magni commodi voluptatibus ducimus alias amet quisquam, debitis ex odio cupiditate in officiis tenetur sit numquam nesciunt soluta. Dignissimos sapiente iusto porro nesciunt facilis voluptatem similique vero consequuntur quidem odit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea. Beatae tempore voluptatem ducimus in quis laboriosam vero eveniet labore, et asperiores tenetur itaque maiores iusto ut dolorum cum eaque culpa repellendus a quo deserunt reprehenderit praesentium assumenda laudantium! Et a nulla suscipit illum repellendus, ipsum magni commodi voluptatibus ducimus alias amet quisquam, debitis ex odio cupiditate in officiis tenetur sit numquam nesciunt soluta. Dignissimos sapiente iusto porro nesciunt facilis voluptatem similique vero consequuntur quidem odit?',
        //     'category_id' => 1,
        //     'user_id' => 1


        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea. Beatae tempore voluptatem ducimus in quis laboriosam vero eveniet labore, et asperiores tenetur itaque maiores iusto ut dolorum cum eaque culpa repellendus a quo deserunt reprehenderit praesentium assumenda laudantium! Et a nulla suscipit illum repellendus, ipsum magni commodi voluptatibus ducimus alias amet quisquam, debitis ex odio cupiditate in officiis tenetur sit numquam nesciunt soluta. Dignissimos sapiente iusto porro nesciunt facilis voluptatem similique vero consequuntur quidem odit?',
        //     'category_id' => 2,
        //     'user_id' => 1


        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi blanditiis illo tempore eligendi unde ab minima facere pariatur eveniet quis quibusdam repellat cumque obcaecati sed sint provident quae nobis, voluptate debitis facilis ea. Beatae tempore voluptatem ducimus in quis laboriosam vero eveniet labore, et asperiores tenetur itaque maiores iusto ut dolorum cum eaque culpa repellendus a quo deserunt reprehenderit praesentium assumenda laudantium! Et a nulla suscipit illum repellendus, ipsum magni commodi voluptatibus ducimus alias amet quisquam, debitis ex odio cupiditate in officiis tenetur sit numquam nesciunt soluta. Dignissimos sapiente iusto porro nesciunt facilis voluptatem similique vero consequuntur quidem odit?',
        //     'category_id' => 2,
        //     'user_id' => 2


        // ]);
    }
}
