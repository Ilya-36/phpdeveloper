<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('seeders/csv/property-data.csv');
        $rows = array_map('str_getcsv', file($path));
        array_shift($rows); // Сдвинуть элемент с начала массива

        foreach ($rows as $row) {
            DB::table('apartment')->insert([
                'Name'      =>  $row[0],
                'Price'     =>  $row[1],
                'Bedrooms'  =>  $row[2],
                'Bathrooms' =>  $row[3],
                'Storeys'   =>  $row[4],
                'Garages'   =>  $row[5],
                'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
