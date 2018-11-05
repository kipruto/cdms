<?php

use Illuminate\Database\Seeder;
use App\FinalStatus;
class FinalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $final_status = [
            ["final_status_name" => "Confirmed Positive"],
            ["final_status_name" => "Confirmed Negative"]
        ];
        foreach ($final_status as $key =>$value) {
            FinalStatus::create($value);
        }
    }
}
