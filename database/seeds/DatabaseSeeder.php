<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS = 0');
         $this->call(PaisSeeder::class);
         $this->call(DepartamentoSeeder::class);
         $this->call(MunicipioSeeder::class);
         $this->call(PersonaSeeder::class);
    }
}
