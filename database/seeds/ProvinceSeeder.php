<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Seeds the data of the provinces
     *
     * @return void
     */
    public function run()
    {
    	$provinces = [
    		[
    			'id' => 1,
    			'name' => "Kigali",
    			'izina' => "Kigali"
    		],
    		[
    			'id' => 2,
    			'name' => "South",
    			'izina' => "Amajyepfo"
    		],
    		[
    			'id' => 3,
    			'name' => "West",
    			'izina' => "Uburengerazuba"
    		],
    		[
    			'id' => 4,
    			'name' => "North",
    			'izina' => "Amajyaruguru"
    		],
    		[
    			'id' => 5,
    			'name' => "East",
    			'izina' => "Uburasirazuba"
    		]
    	];
    	Province::insert($provinces);
    }
}
