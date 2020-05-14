<?php

use Illuminate\Database\Seeder;
use App\SubGroup;

class SubGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubGroup::insert([[
            'name' => 'Group A',
        ],
    	[
            'name' => 'Group B',
        ],
    	[
            'name' => 'Group C',
        ],
    	[
            'name' => 'Group D',
        ]]);
    }
}
