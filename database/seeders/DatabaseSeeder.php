<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/cards');
        Storage::makeDirectory('public/cards');

        $this->call(UserSeeder::class);
        Category::factory(10)->create();
        Card::factory(200)->create();
    }
}
