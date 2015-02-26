<?php


class ProductsTableSeeder extends Seeder {

    public function run()
    {
        Product::create([
        'code' => "",
        'weight' => "",
        'size' => "",
        "name" => "",
        'reference' => "",
        "img_path" => "",
        "price" =>"",
        "types_id" => ""
        ]);
        Product::create([
            'name' => "",
            'img_path' => "",
            'price' => ""
        ]);
        Product::create([
            'name' => "",
            'img_path' => "",
            'price' => ""
        ]);
        Product::create([
            'name' => "",
            'img_path' => "",
            'price' => ""
        ]);

    }

}