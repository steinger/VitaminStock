<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(
          [
              'name' => 'OPC',
              'stock' => 60,
              'description' => 'OPC',
          ]
      );
      DB::table('products')->insert(
          [
              'name' => 'HiLife',
              'stock' => 60,
              'description' => 'HiLife',
          ]
      );
    }
}
