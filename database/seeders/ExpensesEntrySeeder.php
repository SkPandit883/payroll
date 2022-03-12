<?php

namespace Database\Seeders;

use App\Models\DebitCredit;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ExpensesEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $faker;
    public function __construct(){
        $this->faker = Faker::create();

    }
    public function run()
    {
        for ($i=1; $i <=11 ; $i++) { 
           for ($j=0; $j <9 ; $j++) { 
              DebitCredit::create([
                'expenses_category_id'=>$i,
                'date'=>date('Y-m-d'),
                'bill_no'=>Str::random(7),
                'particular'=>$this->faker->name(),
                'debit'=>rand(100,2000),
                'credit'=>rand(100,2000),
                'remarks'=>$this->faker->sentence(),
              ]);
           }
        }
    }
}
