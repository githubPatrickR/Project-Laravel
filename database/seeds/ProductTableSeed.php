<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'title' => 'Car Book',
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51RPsM2vLML._SX376_BO1,204,203,200_.jpg',
        ]);
        $product->save();

        $product = new \App\Product([
            'title' => 'Car Book',
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51RPsM2vLML._SX376_BO1,204,203,200_.jpg',
        ]);
        $product->save();
    }
}
