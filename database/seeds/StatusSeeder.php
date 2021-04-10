<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Pending', 'alias' => 'pending' ],
            ['name' => 'Received', 'alias' => 'received' ],
            ['name' => 'In Progress', 'alias' => 'in_progress'],
            ['name' => 'Completed', 'alias' => 'completed'],
        ];
        \App\Models\OrderStatus::insert($data);

    }
}
