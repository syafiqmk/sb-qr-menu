<?php

namespace Database\Seeders;

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
        $this->call(UserTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(OutletSeeder::class);
        $this->call(OrderTypeSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(IngredientProductsSeeder::class);
        $this->call(GeneralSettingSeeder::class);
    }
}
