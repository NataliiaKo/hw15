<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,50)->create();
        // factory(App\Category::class,50)->create();

        $categories=[
            ['title' => 'Features', 'slug' =>'features'],
            ['title' => 'Food', 'slug' =>'food'],
            ['title' => 'Travel', 'slug' =>'travel'],
            ['title' => 'Recipe', 'slug' =>'recipe'],
            ['title' => 'Bread', 'slug' =>'bread'],
            ['title' => 'Breakfast', 'slug' =>'breakfast'],
            ['title' => 'Meat', 'slug' =>'meat'],
            ['title' => 'Fastfood', 'slug' =>'fastfood'],
            ['title' => 'Salad', 'slug' =>'salad'],
            ['title' => 'Soup', 'slug' =>'soup'],

        ];
            DB::table('categories')->insert($categories);
}
}
