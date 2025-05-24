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
                'name'      =>  $row[0],
                'price'     =>  $row[1],
                'bedrooms'  =>  $row[2],
                'bathrooms' =>  $row[3],
                'storeys'   =>  $row[4],
                'garages'   =>  $row[5],
                'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
