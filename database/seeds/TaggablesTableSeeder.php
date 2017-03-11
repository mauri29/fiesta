<?php

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $taggables = new \App\Models\Taggable([
            'tag_id' => '1',
            'taggable_id' => '1',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save(); 
        $taggables = new \App\Models\Taggable([
            'tag_id' => '1',
            'taggable_id' => '2',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();  
        $taggables = new \App\Models\Taggable([
            'tag_id' => '4',
            'taggable_id' => '3',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save(); 
        $taggables = new \App\Models\Taggable([
            'tag_id' => '3',
            'taggable_id' => '4',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save(); 
        $taggables = new \App\Models\Taggable([
            'tag_id' => '4',
            'taggable_id' => '5',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();         
        $taggables = new \App\Models\Taggable([
            'tag_id' => '1',
            'taggable_id' => '6',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save(); 
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '7',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '8',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();        
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '9',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '10',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '11',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '12',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '6',
            'taggable_id' => '13',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
        $taggables = new \App\Models\Taggable([
            'tag_id' => '6',
            'taggable_id' => '14',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();        
        $taggables = new \App\Models\Taggable([
            'tag_id' => '5',
            'taggable_id' => '15',
            'taggable_type' => 'App\Models\Post',
        ]);
        $taggables->save();
    }
}
