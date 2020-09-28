<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run sectors seed
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->command->info('Seeding sectors table');

        DB::unprepared(file_get_contents(__DIR__ . '/sectors.sql'));

        $this->command->info('Seeding sectors done successfully');
    }
}
