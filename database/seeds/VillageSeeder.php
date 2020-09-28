<?php

use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

	    $this->command->info('Seeding 	villages table');
	    DB::unprepared(file_get_contents(__DIR__ . '/villages.sql'));
        $this->command->info('Seeding villages done successfully');


    }
}
