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
        DB::table('recipe_ingredients')->delete();
        DB::table('recipes')->delete();
        DB::table('ingredients')->delete();

        $this->call(IngredientTableSeeder::class);
        $this->call(RecipeTableSeeder::class);
    }
}
