<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Taufik hidayat',
            'username' => 'taufik9503',
            'email' => 'taufikhidayat9503@gmail.com',
            'password' => bcrypt('11112222')
        ]);

        // User::create([
        //     'name' => 'Wiwik Lestari',
        //     'email' => 'wiwiklestari2770@gmail.com',
        //     'password' => bcrypt('4444')
        // ]);
        User::factory(4)->create();

        Categories::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Categories::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer'
        ]);

        Categories::create([
            'name' => 'Data Analysis',
            'slug' => 'data-analysis'
        ]);
        Categories::create([
            'name' => 'Computer Sience',
            'slug' => 'computer-sience'
        ]);

        Post::factory(20)->create();

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste sequi nostrum, ipsa error tempore quod, quos tempora eius vel voluptate nemo saepe dolorum perferendis omnis, doloribus numquam accusantium corporis?',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis earum ratione, cupiditate molestiae, autem nesciunt unde consequatur quae culpa magni ea reprehenderit nostrum praesentium quos facere totam consectetur assumenda? Quaerat, molestiae quidem expedita voluptatem obcaecati eos in magni magnam reprehenderit! Quos architecto dolorum eveniet beatae cum, sapiente quis veritatis consectetur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quis optio a quisquam aliquid corporis molestias adipisci, blanditiis numquam recusandae nulla assumenda iusto laborum illo fugiat possimus soluta eveniet, deserunt quas omnis deleniti culpa officia. Quam sed sequi nam ullam molestiae illum praesentium laborum repellendus alias aliquam, sit nostrum voluptates?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet soluta architecto itaque, ut id aspernatur officia et. Perspiciatis temporibus voluptate quod harum perferendis assumenda. Quae impedit molestias possimus quis aut hic quos quod voluptas, labore harum officia assumenda atque aliquid quia et doloremque laboriosam fuga sequi soluta culpa. Velit.</p>',
        //         'user_id' => 1,
        //         'categories_id' => 1,
        //     ]);

        //     Post::create([
        //         'title' => 'Judul Kedua',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste sequi nostrum, ipsa error tempore quod, quos tempora eius vel voluptate nemo saepe dolorum perferendis omnis, doloribus numquam accusantium corporis?',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis earum ratione, cupiditate molestiae, autem nesciunt unde consequatur quae culpa magni ea reprehenderit nostrum praesentium quos facere totam consectetur assumenda? Quaerat, molestiae quidem expedita voluptatem obcaecati eos in magni magnam reprehenderit! Quos architecto dolorum eveniet beatae cum, sapiente quis veritatis consectetur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quis optio a quisquam aliquid corporis molestias adipisci, blanditiis numquam recusandae nulla assumenda iusto laborum illo fugiat possimus soluta eveniet, deserunt quas omnis deleniti culpa officia. Quam sed sequi nam ullam molestiae illum praesentium laborum repellendus alias aliquam, sit nostrum voluptates?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet soluta architecto itaque, ut id aspernatur officia et. Perspiciatis temporibus voluptate quod harum perferendis assumenda. Quae impedit molestias possimus quis aut hic quos quod voluptas, labore harum officia assumenda atque aliquid quia et doloremque laboriosam fuga sequi soluta culpa. Velit.</p>',
        //         'user_id' => 1,
        //         'categories_id' => 1,
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Ketiga',
        //         'slug' => 'judul-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste sequi nostrum, ipsa error tempore quod, quos tempora eius vel voluptate nemo saepe dolorum perferendis omnis, doloribus numquam accusantium corporis?',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis earum ratione, cupiditate molestiae, autem nesciunt unde consequatur quae culpa magni ea reprehenderit nostrum praesentium quos facere totam consectetur assumenda? Quaerat, molestiae quidem expedita voluptatem obcaecati eos in magni magnam reprehenderit! Quos architecto dolorum eveniet beatae cum, sapiente quis veritatis consectetur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quis optio a quisquam aliquid corporis molestias adipisci, blanditiis numquam recusandae nulla assumenda iusto laborum illo fugiat possimus soluta eveniet, deserunt quas omnis deleniti culpa officia. Quam sed sequi nam ullam molestiae illum praesentium laborum repellendus alias aliquam, sit nostrum voluptates?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet soluta architecto itaque, ut id aspernatur officia et. Perspiciatis temporibus voluptate quod harum perferendis assumenda. Quae impedit molestias possimus quis aut hic quos quod voluptas, labore harum officia assumenda atque aliquid quia et doloremque laboriosam fuga sequi soluta culpa. Velit.</p>',
        //         'user_id' => 2,
        //         'categories_id' => 2,
        //     ]);
        //     Post::create([
        //         'title' => 'Judul Keempat',
        //         'slug' => 'judul-keempat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iste sequi nostrum, ipsa error tempore quod, quos tempora eius vel voluptate nemo saepe dolorum perferendis omnis, doloribus numquam accusantium corporis?',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis earum ratione, cupiditate molestiae, autem nesciunt unde consequatur quae culpa magni ea reprehenderit nostrum praesentium quos facere totam consectetur assumenda? Quaerat, molestiae quidem expedita voluptatem obcaecati eos in magni magnam reprehenderit! Quos architecto dolorum eveniet beatae cum, sapiente quis veritatis consectetur.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quis optio a quisquam aliquid corporis molestias adipisci, blanditiis numquam recusandae nulla assumenda iusto laborum illo fugiat possimus soluta eveniet, deserunt quas omnis deleniti culpa officia. Quam sed sequi nam ullam molestiae illum praesentium laborum repellendus alias aliquam, sit nostrum voluptates?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet soluta architecto itaque, ut id aspernatur officia et. Perspiciatis temporibus voluptate quod harum perferendis assumenda. Quae impedit molestias possimus quis aut hic quos quod voluptas, labore harum officia assumenda atque aliquid quia et doloremque laboriosam fuga sequi soluta culpa. Velit.</p>',
        //         'user_id' => 2,
        //         'categories_id' => 3,
        //     ]);
    }
}
