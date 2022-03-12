<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Electricity','Furniture','Lunch','Miscellaneous','Office Expenses','Office Rent','Salary','Stationery','Travel Expenses','Vehicle Fair','Vehicle Maintenance'];
        foreach ($categories as $key => $category) {
            ExpenseCategory::create([
                'name'=>$category,
                'category'=>'utility'
                
            ]);
        }
    }
}
