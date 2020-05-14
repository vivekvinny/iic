<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('students')->truncate();
        Student::insert([[
            'name' => 'James',
        ],
    	[
            'name' => 'William',
        ],
    	[
            'name' => 'Robert',
        ],
    	[
            'name' => 'Michael',
        ],
    	[
            'name' => 'David',
        ],
    	[
            'name' => 'Richard',
        ],
    	[
            'name' => 'Joseph',
        ],
    	[
            'name' => 'Thomas',
        ],
    	[
            'name' => 'Charles',
        ],
    	[
            'name' => 'Christopher',
        ],
    	[
            'name' => 'Daniel',
        ],
    	[
            'name' => 'Daniel',
        ],
		[
            'name' => 'Anthony',
        ],
    	[
            'name' => 'Donald',
        ],
    	[
            'name' => 'Mark',
        ],
    	[
            'name' => 'Paul',
        ],
    	[
            'name' => 'Steven',
        ],
    	[
            'name' => 'Andrew',
        ],
    	[
            'name' => 'Kenneth',
        ],
    	[
            'name' => 'Joshua',
        ]]);
    }
}
