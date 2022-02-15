<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            ['name'=>'Corporate Governance'],
            ['name'=>'Financial Crime Prevention'],
            ['name'=>'Insurance Courses'],
            ['name'=>'Risk Management'],
        ];

        foreach($data as $dd){
            Category::create($dd);
        }
    }
}
