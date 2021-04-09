<?php

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Basic', 'price' => 6000 , 'commission' => 300],
            ['name' => 'Standard', 'price' => 7500 , 'commission' => 400],
            ['name' => 'Premium', 'price' => 10000 , 'commission' => 500],
        ];
        \App\Models\Plan::insert($data);
    }
}
