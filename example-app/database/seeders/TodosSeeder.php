<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Todo::factory()->count(20)->create();
        // we can also can do in this 
        \App\Models\Todo::factory(20)->create();
    }
}
