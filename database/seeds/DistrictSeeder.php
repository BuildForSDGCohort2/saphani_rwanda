<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the seeds for the district using sql
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        //

        $this->command->info('Seeding districts table');

        DB::unprepared(file_get_contents(__DIR__ . '/districts.sql'));

        $this->command->info('Seeding districts done successfully');
    }
}
