<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                'name' => 'Linus Torvalls mug',
                'code' => 'LINUS-MUG',
                'description' => 'A finely-made ceramic mug emblazoned with a line drawing of the father of Linux himself.',
                'image' => 'linusmug.png',
                'price' => 14.00 ]);
        DB::table('products')->insert([
                'name' => 'Sycamore sweatshirt',
                'code' => 'SYCAMORE-SWT-LG',
                'description' => 'A warm, maroon hoodless sweatshirt with the Sycamore Land Trust logo on the front',
                'image' => 'sycamoresweatshirt.png',
                'price' => 21.75
            ]);
    }
}
