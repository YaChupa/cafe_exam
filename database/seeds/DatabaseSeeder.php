<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //Category::create(array('name' => 'Teas','code' => 'teas','image' => '123'));
        //Category::create(array('name' => 'Coffee','code' => 'coffee','image' => '1233'));
        //Category::create(array('name' => 'Cakes','code' => 'cakes','image' => '1234'));
        
        //Product::create(array('category_id' => '1','name' => 'Green','code' => 'green','description' => '1234','image' => '1234','price' => '1.7'));
        //Product::create(array('category_id' => '1','name' => 'Black','code' => 'black','description' => '1234','image' => '1234','price' => '1.8'));
        Product::create(array('category_id' => '1','name' => 'Mint tea','code' => 'mint_tea','description' => '1234','image' => '1234','price' => '1.9'));
        Product::create(array('category_id' => '1','name' => 'Apple and cinnamon tea','code' => 'apple_and_cinnamon_tea','description' => '1234','image' => '1234','price' => '2.0'));
        Product::create(array('category_id' => '1','name' => 'Tropical fruits','code' => 'tropical_fruits','description' => '1234','image' => '1234','price' => '2.1'));
    }
}
