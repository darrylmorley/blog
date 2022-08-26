<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // Post::factory(5)->create();

        // $user = \App\Models\User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum dolar amet.</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem quis et cum molestiae optio maxime, eveniet voluptas. Libero amet eius nisi optio similique vel fuga dolorem, velit sequi. Tempora, inventore.
        //     Consequuntur esse impedit soluta laborum officiis voluptatem nulla dolor inventore perspiciatis aspernatur, a molestiae eveniet. Vero fugiat facere nulla, eius obcaecati excepturi pariatur! Quis alias ea odit quia illo nostrum.
        //     Fugiat, nam voluptatem! Voluptate ipsum quos velit ipsam quas nihil soluta nulla, animi tenetur voluptatum ab, accusantium doloremque totam laboriosam enim nostrum. Adipisci, obcaecati. Necessitatibus consectetur voluptatibus sequi quae amet.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Lorem ipsum dolar amet.</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem quis et cum molestiae optio maxime, eveniet voluptas. Libero amet eius nisi optio similique vel fuga dolorem, velit sequi. Tempora, inventore.
        //     Consequuntur esse impedit soluta laborum officiis voluptatem nulla dolor inventore perspiciatis aspernatur, a molestiae eveniet. Vero fugiat facere nulla, eius obcaecati excepturi pariatur! Quis alias ea odit quia illo nostrum.
        //     Fugiat, nam voluptatem! Voluptate ipsum quos velit ipsam quas nihil soluta nulla, animi tenetur voluptatum ab, accusantium doloremque totam laboriosam enim nostrum. Adipisci, obcaecati. Necessitatibus consectetur voluptatibus sequi quae amet.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem ipsum dolar amet.</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem quis et cum molestiae optio maxime, eveniet voluptas. Libero amet eius nisi optio similique vel fuga dolorem, velit sequi. Tempora, inventore.
        //     Consequuntur esse impedit soluta laborum officiis voluptatem nulla dolor inventore perspiciatis aspernatur, a molestiae eveniet. Vero fugiat facere nulla, eius obcaecati excepturi pariatur! Quis alias ea odit quia illo nostrum.
        //     Fugiat, nam voluptatem! Voluptate ipsum quos velit ipsam quas nihil soluta nulla, animi tenetur voluptatum ab, accusantium doloremque totam laboriosam enim nostrum. Adipisci, obcaecati. Necessitatibus consectetur voluptatibus sequi quae amet.</p>'
        // ]);
    }
}
