<?php

use Illuminate\Database\Seeder;
use App\PreliminaryStatus;

class PreliminaryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preliminary_status = [
            ["preliminary_status_name" => "Preliminary Positive"],
            ["preliminary_status_name" => "Preliminary Negative"]
        ];
        foreach ($preliminary_status as $key =>$value) {
            PreliminaryStatus::create($value);
        }
    }
}
