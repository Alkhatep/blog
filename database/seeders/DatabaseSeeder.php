<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget metus ut ex blandit mattis. Aenean purus dolor, faucibus nec nibh sit amet, suscipit dignissim erat. Curabitur faucibus nulla nulla, a placerat ligula placerat dapibus. Sed tempus elementum sapien, vel condimentum sem ullamcorper vel. Vivamus pretium eu nulla nec gravida. Duis pretium, tellus vitae semper consequat, elit orci dignissim leo, quis euismod enim ligula vel dolor. In quis leo et quam condimentum sodales. Fusce non cursus dui. Nam quam eros, vestibulum ac dui ut, euismod varius odio. Nunc malesuada lobortis semper. Cras neque dolor, dignissim at orci accumsan, aliquet volutpat nunc. Nunc id mi est. Donec et tristique lacus, eget cursus nisi. Morbi mattis, erat vel ullamcorper venenatis, risus sem luctus augue, eu dignissim odio urna ac augue.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget metus ut ex blandit mattis. Aenean purus dolor, faucibus nec nibh sit amet, suscipit dignissim erat. Curabitur faucibus nulla nulla, a placerat ligula placerat dapibus. Sed tempus elementum sapien, vel condimentum sem ullamcorper vel. Vivamus pretium eu nulla nec gravida. Duis pretium, tellus vitae semper consequat, elit orci dignissim leo, quis euismod enim ligula vel dolor. In quis leo et quam condimentum sodales. Fusce non cursus dui. Nam quam eros, vestibulum ac dui ut, euismod varius odio. Nunc malesuada lobortis semper. Cras neque dolor, dignissim at orci accumsan, aliquet volutpat nunc. Nunc id mi est. Donec et tristique lacus, eget cursus nisi. Morbi mattis, erat vel ullamcorper venenatis, risus sem luctus augue, eu dignissim odio urna ac augue.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget metus ut ex blandit mattis. Aenean purus dolor, faucibus nec nibh sit amet, suscipit dignissim erat. Curabitur faucibus nulla nulla, a placerat ligula placerat dapibus. Sed tempus elementum sapien, vel condimentum sem ullamcorper vel. Vivamus pretium eu nulla nec gravida. Duis pretium, tellus vitae semper consequat, elit orci dignissim leo, quis euismod enim ligula vel dolor. In quis leo et quam condimentum sodales. Fusce non cursus dui. Nam quam eros, vestibulum ac dui ut, euismod varius odio. Nunc malesuada lobortis semper. Cras neque dolor, dignissim at orci accumsan, aliquet volutpat nunc. Nunc id mi est. Donec et tristique lacus, eget cursus nisi. Morbi mattis, erat vel ullamcorper venenatis, risus sem luctus augue, eu dignissim odio urna ac augue.</p>'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
