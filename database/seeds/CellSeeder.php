<?php

use Illuminate\Database\Seeder;

class CellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->command->info('Seeding cells table');

        DB::unprepared(file_get_contents(__DIR__ . '/cells.sql'));

        $this->command->info('Seeding cells done successfully');
    }
}
