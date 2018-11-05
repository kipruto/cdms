<?php

use Illuminate\Database\Seeder;
use App\SampleLocation;

class SampleLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample_location = [
            ["sample_location_name" => "On Site"],
            ["sample_location_name" => "Dispatched"],
            ["sample_location_name" => "Received"],
            ["sample_location_name" => "Processed"]
        ];
        foreach ($sample_location as $key =>$value) {
            SampleLocation::create($value);
        }
    }
}

