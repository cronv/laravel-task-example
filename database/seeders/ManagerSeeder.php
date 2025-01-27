<?php

namespace cronv\LaravelTaskExample\Database\Seeders;

use cronv\LaravelTaskExample\Models\Manager;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Manager::factory(50)->create();
    }
}
