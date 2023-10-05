<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        DB::table('products')->insert([
            'title' => 'Café moído',
            'image' => 'cafe.jpeg',
            'price' => 19.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Croissant',
            'image' => 'croissant.jpeg',
            'price' => 8.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Milkshake Chocolate',
            'image' => 'milkshake.jpeg',
            'price' => 16.59,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Milkshake Morango',
            'image' => 'milkshake-morango.jpg',
            'price' => 16.59,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Misto Quente',
            'image' => 'misto.jpg',
            'price' => 12.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Omelete',
            'image' => 'omelete.jpg',
            'price' => 9.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Ovo com Torradas',
            'image' => 'ovo-com-torradas.jpg',
            'price' => 17.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Panqueca',
            'image' => 'Panqueca.jpg',
            'price' => 11.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Pão de Queijo',
            'image' => 'pao-de-queijo-facil-e-delicioso.jpg',
            'price' => 4.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Torrada Degustacao',
            'image' => 'torrada-degustacao.jpg',
            'price' => 19.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Torrada com Mel e Frutas',
            'image' => 'torrada-mel-frutas.jpeg',
            'price' => 18.99,
            'description' => $description
        ]);
        DB::table('products')->insert([
            'title' => 'Torrada com Mel',
            'image' => 'torrada-mel.jpg',
            'price' => 14.99,
            'description' => $description
        ]);
    }
}
