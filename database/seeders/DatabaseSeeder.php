<?php

namespace cronv\LaravelTaskExample\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ManagerSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
