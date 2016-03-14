<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Picture;

class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = Product::all();
        $files = Storage::allFiles();

        foreach($files as $file){
            Storage::delete($file);
        }

        foreach($products as $product){

            $uri = str_random(12).'_350x200.jpg';
            $file = file_get_contents('http://lorempicsum.com/rio/350/200/1');

            Storage::put($uri, $file);
            Picture::create([
                'product_id' => $product->id,
                'uri' => $uri,
                'name' => 'poulet',
            ]);
        }
    }
}
