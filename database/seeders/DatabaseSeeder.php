<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // ← make sure this is here

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

$categories = [
    'Tech',
    'Health',
    'Science',
    'Travel',
    'Food',
    'Lifestyle',
    'Education',
];
foreach ($categories as $category) {
    Category::create([
        'name' => $category,
    ]);
}

Post::factory(100)->create();



}
}