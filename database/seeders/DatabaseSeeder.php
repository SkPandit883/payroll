<?php

namespace Database\Seeders;

use App\Models\CashBook;
use Illuminate\Database\Seeder;
use Database\Factories\CashBookFactory;
use Database\Seeders\ExpenseCategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ExpenseCategorySeeder::class,
            ExpensesEntrySeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        CashBook::factory(20)->create();
    }
}
