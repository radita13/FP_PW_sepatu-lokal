<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductDetailsSeeder::class,
        ]);

        User::factory(5)->create();

        DB::table('users')->insert([
            [
                'username' => 'god admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'admin' => true,
                'image' => 'img/home/Profile.png',
                'phone_number' => '+6286745389674',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'radita',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('password'),
                'admin' => true,
                'image' => 'img/home/Profile.png',
                'phone_number' => '+6286777389673',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        $products = [
            [
                'admin' => true,
                'username' => 'god admin',
                'name_product' => 'Johnson - Pluto Lowcut (LC) Black White',
                'name_localbrand' => 'Johnson Shoes',
                'price' => 200000,
                'discount' => 50000,
                'image' => 'img/buymenu/Johnson/man/1/Johnson_header1.png',
                'category_people' => 'man',
                'category_shoes' => 'sports',
                'link_shoes' => 'https://tokopedia.link/XoJgyG7zYKb'
            ],
            [
                'admin' => true,
                'username' => 'god admin',
                'name_product' => 'Athletica - Warner 1 Dark Grey',
                'name_localbrand' => 'Athletica Shoes',
                'price' => 150000,
                'discount' => 200000,
                'image' => 'img/buymenu/Athletica/man/1/Athletica_header1.png',
                'category_people' => 'man',
                'category_shoes' => 'sports',
                'link_shoes' => 'https://tokopedia.link/DR7IzqHyYKb'
            ],
            [
                'admin' => true,
                'username' => 'god admin',
                'name_product' => 'Aerostreet Massive Low Hitam Natural',
                'name_localbrand' => 'Aerostreet Shoes',
                'price' => 159900,
                'discount' => 319800,
                'image' => 'img/buymenu/Aerostreet/man/1/Aerostreet_header1.png',
                'category_people' => 'man',
                'category_shoes' => 'sports',
                'link_shoes' => 'https://tokopedia.link/hGIxlZczYKb'
            ],
            [
                'admin' => true,
                'username' => 'god admin',
                'name_product' => 'Compass Gazelle Low Black Gum',
                'name_localbrand' => 'Compass Shoes',
                'price' => 300000,
                'discount' => 20000,
                'image' => 'img/buymenu/Compass/man/1/Compass_header1.png',
                'category_people' => 'man',
                'category_shoes' => 'sports',
                'link_shoes' => 'https://tokopedia.link/GSyENQBzYKb'
            ],
            [
                'admin' => true,
                'username' => 'god admin',
                'name_product' => 'Athletica RBS - RBS Carera Blue White',
                'name_localbrand' => 'Athletica Shoes',
                'price' => 189000,
                'discount' => 375000,
                'image' => 'img/buymenu/Athletica/women/1/Athletica_header1.png',
                'category_people' => 'women',
                'category_shoes' => 'sports',
                'link_shoes' => 'https://tokopedia.link/sloqELIzYKb'
                ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
