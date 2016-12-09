
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);

        // $this->call(CategoriesTableSeeder::class);

        // $this->call(DishesTableSeeder::class);

        // $this->call(SetMenusTableSeeder::class);

        // $this->call(SetItemsTableSeeder::class);


        // $this->call(TermsTableSeeder::class);

        $this->call(AboutsTableSeeder::class);

    }
}
