<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Adriyansyah Syaputra',
            'username' => 'Adriyansyah',
            'email' => 'adriyansyah@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Syaputra Nasution',
        //     'email' => 'nasution@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(4)->create();

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

        Category::create([
            'name' => 'Business',
            'slug' => 'business'
        ]);

        Post::factory(20)->create();

        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores, itaque ullam voluptate amet, magni quidem quibusdam ipsam inventore, delectus suscipit saepe vero sit officiis doloremque veniam veritatis velit possimus tempore illo. Blanditiis totam fugit, deserunt aut voluptates rem ex mollitia! Distinctio modi voluptatibus dolore quod consectetur voluptatem nihil provident neque! Expedita nam ut maxime nisi odio error ullam delectus vitae officiis, vel nemo temporibus nihil blanditiis, molestiae quae id explicabo quaerat cumque repellendus eligendi minima doloremque repudiandae culpa accusamus. Porro facilis impedit est labore esse natus ab consequuntur, sequi cum, sed sunt magni excepturi aliquam explicabo molestias odio facere quidem quis eveniet ipsam soluta tempora exercitationem dicta iure. Nam iure hic nemo sunt accusamus nihil, id tempora quam. Dolorem, itaque fuga distinctio velit nam enim obcaecati eaque ullam soluta provident totam ratione earum nisi deserunt ipsum quis repellat tenetur, ad eos vel ea est. Dolorum fugiat asperiores earum laborum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores, itaque ullam voluptate amet, magni quidem quibusdam ipsam inventore, delectus suscipit saepe vero sit officiis doloremque veniam veritatis velit possimus tempore illo. Blanditiis totam fugit, deserunt aut voluptates rem ex mollitia! Distinctio modi voluptatibus dolore quod consectetur voluptatem nihil provident neque! Expedita nam ut maxime nisi odio error ullam delectus vitae officiis, vel nemo temporibus nihil blanditiis, molestiae quae id explicabo quaerat cumque repellendus eligendi minima doloremque repudiandae culpa accusamus. Porro facilis impedit est labore esse natus ab consequuntur, sequi cum, sed sunt magni excepturi aliquam explicabo molestias odio facere quidem quis eveniet ipsam soluta tempora exercitationem dicta iure. Nam iure hic nemo sunt accusamus nihil, id tempora quam. Dolorem, itaque fuga distinctio velit nam enim obcaecati eaque ullam soluta provident totam ratione earum nisi deserunt ipsum quis repellat tenetur, ad eos vel ea est. Dolorum fugiat asperiores earum laborum!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create ([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores, itaque ullam voluptate amet, magni quidem quibusdam ipsam inventore, delectus suscipit saepe vero sit officiis doloremque veniam veritatis velit possimus tempore illo. Blanditiis totam fugit, deserunt aut voluptates rem ex mollitia! Distinctio modi voluptatibus dolore quod consectetur voluptatem nihil provident neque! Expedita nam ut maxime nisi odio error ullam delectus vitae officiis, vel nemo temporibus nihil blanditiis, molestiae quae id explicabo quaerat cumque repellendus eligendi minima doloremque repudiandae culpa accusamus. Porro facilis impedit est labore esse natus ab consequuntur, sequi cum, sed sunt magni excepturi aliquam explicabo molestias odio facere quidem quis eveniet ipsam soluta tempora exercitationem dicta iure. Nam iure hic nemo sunt accusamus nihil, id tempora quam. Dolorem, itaque fuga distinctio velit nam enim obcaecati eaque ullam soluta provident totam ratione earum nisi deserunt ipsum quis repellat tenetur, ad eos vel ea est. Dolorum fugiat asperiores earum laborum!',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

        // Post::create ([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est dolores, itaque ullam voluptate amet, magni quidem quibusdam ipsam inventore, delectus suscipit saepe vero sit officiis doloremque veniam veritatis velit possimus tempore illo. Blanditiis totam fugit, deserunt aut voluptates rem ex mollitia! Distinctio modi voluptatibus dolore quod consectetur voluptatem nihil provident neque! Expedita nam ut maxime nisi odio error ullam delectus vitae officiis, vel nemo temporibus nihil blanditiis, molestiae quae id explicabo quaerat cumque repellendus eligendi minima doloremque repudiandae culpa accusamus. Porro facilis impedit est labore esse natus ab consequuntur, sequi cum, sed sunt magni excepturi aliquam explicabo molestias odio facere quidem quis eveniet ipsam soluta tempora exercitationem dicta iure. Nam iure hic nemo sunt accusamus nihil, id tempora quam. Dolorem, itaque fuga distinctio velit nam enim obcaecati eaque ullam soluta provident totam ratione earum nisi deserunt ipsum quis repellat tenetur, ad eos vel ea est. Dolorum fugiat asperiores earum laborum!',
        //     'category_id' => 4,
        //     'user_id' => 1
        // ]);
    }
}
