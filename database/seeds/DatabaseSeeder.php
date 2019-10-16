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

        $category=new App\Category();
        $category->title = "Features";
        $category->slug = "features";
        $category->save();

        $category=new App\Category();
        $category->title = "Food";
        $category->slug = "food";
        $category->save();

        $category=new App\Category();
        $category->title = "Travel";
        $category->slug = "travel";
        $category->save();

        $category=new App\Category();
        $category->title = "Recipe";
        $category->slug = "recipe";
        $category->save();

        $category=new App\Category();
        $category->title = "Bread";
        $category->slug = "bread";
        $category->save();

        $category=new App\Category();
        $category->title = "Breakfast";
        $category->slug = "breakfast";
        $category->save();

        $category=new App\Category();
        $category->title = "Meat";
        $category->slug = "meat";
        $category->save();

        $category=new App\Category();
        $category->title = "Fastfood";
        $category->slug = "fastfood";
        $category->save();

        $category=new App\Category();
        $category->title = "Salad";
        $category->slug = "salad";
        $category->save();

        $category=new App\Category();
        $category->title = "Soup";
        $category->slug = "soup";
        $category->save();
    }
}
