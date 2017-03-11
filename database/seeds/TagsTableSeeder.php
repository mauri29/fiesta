<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = new \App\Models\Tag([
            'name' => 'Bebidas',
            'slug' => 'bebida',
        ]);
        $tags->save();  
        $tags = new \App\Models\Tag([
            'name' => 'Comestibles',
            'slug' => 'comestible',
        ]);
        $tags->save();  
        $tags = new \App\Models\Tag([
            'name' => 'Dulces',
            'slug' => 'dulce',
        ]);
        $tags->save();  
        $tags = new \App\Models\Tag([
            'name' => 'Cafes',
            'slug' => 'cafe',
        ]);
        $tags->save(); 
        $tags = new \App\Models\Tag([
            'name' => 'Frutas',
            'slug' => 'fruta',
        ]);
        $tags->save(); 
        $tags = new \App\Models\Tag([
            'name' => 'Chilis',
            'slug' => 'chili',
        ]);
        $tags->save();         
    }
}