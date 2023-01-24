<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = Product::create([
       	'name' => 'product1',
       	'amount' => '100',
       	'iva' => "15"
       ]);

      $user = Product::create([
       	'name' => 'product2',
       	'amount' => '100',
       	'iva' => "15"
       ]);
      $user = Product::create([
       	'name' => 'product3',
       	'amount' => '100',
       	'iva' => "15"
       ]);
      $user = Product::create([
       	'name' => 'product4',
       	'amount' => '100',
       	'iva' => "15"
       ]);
      $user = Product::create([
       	'name' => 'product5',
       	'amount' => '100',
       	'iva' => "15"
       ]);

    }
}
