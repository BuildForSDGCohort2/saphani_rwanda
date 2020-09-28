<?php

use Illuminate\Database\Seeder;

class DIVISION extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        //

        $this->command->info('Seeding divisions table');

        DB::unprepared(file_get_contents(__DIR__ . '/divisions.sql'));

        $this->command->info('Seeding divisions done successfully');
    }
}
