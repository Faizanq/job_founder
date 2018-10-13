<?php

use App\Models\Language;
use App\Models\Reason;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Language::truncate();

        $languageQuantity = 10;
        $reasonQuantity = 10;

        factory(Language::class,$languageQuantity)->create();
        factory(Reason::class,$reasonQuantity)->create();

    }
}
