<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'name' => 'Downshifter Sports Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-11.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Lace-Up Running Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 350000,
                'url_image' => 'http://localhost:8000/assets/images/product-2.jpg',
                'qty' => 20,
            ],
            [
                'name' => 'Lace Fastening Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-3.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Flat Lace-Fastening Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-10.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Flat Heel Gray Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-5.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Lace-Fastening Black Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-3.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'HRX Men`s Cotton Socks',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 20000,
                'url_image' => 'http://localhost:8000/assets/images/product-7.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Lace-Up Running Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 250000,
                'url_image' => 'http://localhost:8000/assets/images/product-2.jpg',
                'qty' => 30,
            ],
            [
                'name' => 'Lace-Fastening White Shoes',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English.',
                'price' => 350000,
                'url_image' => 'http://localhost:8000/assets/images/product-12.jpg',
                'qty' => 30,
            ],
        ];

        foreach ($product as $key => $value) {
            DB::table('product')->insert([
                'name' => $value['name'],
                'description' => $value['description'],
                'price' => $value['price'],
                'url_image' => $value['url_image'],
                'qty' => $value['qty'],
            ]);
        }
    }
}
