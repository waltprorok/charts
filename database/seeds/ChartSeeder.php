<?php

use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([

            [
                'id' => '1',
                'name' => 'Products',
                'year' => '2009',
                'price' => '1000.00',
                'created_at' => '2009-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'name' => 'Products',
                'year' => '2010',
                'price' => '2000.00',
                'created_at' => '2010-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'name' => 'Products',
                'year' => '2011',
                'price' => '3000.00',
                'created_at' => '2011-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'name' => 'Products',
                'year' => '2012',
                'price' => '4000.00',
                'created_at' => '2012-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '5',
                'name' => 'Products',
                'year' => '2013',
                'price' => '5000.00',
                'created_at' => '2013-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '6',
                'name' => 'Products',
                'year' => '2014',
                'price' => '6000.00',
                'created_at' => '2014-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '7',
                'name' => 'Products',
                'year' => '2015',
                'price' => '7000.00',
                'created_at' => '2015-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '8',
                'name' => 'Products',
                'year' => '2016',
                'price' => '8000.00',
                'created_at' => '2016-09-17 19:25:07',
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
