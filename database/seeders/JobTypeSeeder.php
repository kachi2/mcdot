<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Full-Time'],
            ['name' => 'Part-Time'],
            ['name' => 'Temporal'],
            ['name' => 'Permanent'],
            ['name' => 'Band 2 Health Care Assistant']
        ];

        foreach($data as $dd)
        {
            JobType::create($dd);
        }
    }
}
