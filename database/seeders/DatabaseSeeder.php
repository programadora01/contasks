<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            // UserTableSeeder::class,
            // FinanceiroTableSeeder::class,
            // EmpresasTableSeeder::class,
            // ConfigAtividadesTableSeeder::class,
            // ConfigSetoresTableSeeder::class,
            // ConfigTarefasTableSeeder::class,
        ]);
    }
}
