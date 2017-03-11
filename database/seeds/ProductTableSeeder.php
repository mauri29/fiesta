<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
        	'imagePath' => 'http://lachaticadeli.com/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/5/2/52-postobon-colombiana-300ml.jpg',
        	'title' => 'Colombiana 300mL',
        	'description' => 'La Colombiana 300mL es una bebida de Colombia con sabor a champán.',
            'weight' => 250,
        	'price' => 1.75,
            'offer' => 8,
            'slug' => 'Colombiana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'http://lachaticadeli.com/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/5/4/54-manzana-330ml.jpg',
        	'title' => 'Manzana 300mL',
        	'description' => 'La Manzana Postobón 300mL es una bebida de Colombia tiene un sabor único e incomparable.',
        	'price' => 1.50,
            'weight' => 250,
            'offer' => 15,
            'slug' => 'Manzana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'http://lachaticadeli.com/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/5/7/57-uva-330ml.jpg',
        	'title' => 'Uva 300mL',
        	'description' => 'La Uva Postobón 300mL es una bebida de Colombia que tiene un sabor especial.',
            'weight' => 250,
        	'price' => 12,
            'offer' => 9,
            'slug' => 'Uva300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'http://www.foodplanetcompany.com/wp-content/uploads/2015/03/image22.png',
        	'title' => 'Guarana',
        	'description' => 'Dulce de frambuesa con chicle mascable en su interior. 24 unidades.',
        	'price' => 35,
            'weight' => 250,
            'offer' => 25,
            'slug' => 'Guarana',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'http://www.unidexholland.com/content/artikels/big/D009200.jpg',
        	'title' => 'Jugo Hit Mango',
        	'description' => 'Cafe molido de Colombia. Sabor unico.',
        	'price' => 6.99,
            'weight' => 125,
            'offer' => 27,
            'slug' => 'JugoHitMango'
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'https://i5.walmartimages.com/asr/3ad31f18-a5aa-43c9-9c4a-2ec1ef11644c_1.a9c5ab684b7a6537a65ef7246d415af3.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF',
        	'title' => 'Jugo Hit Mora',
        	'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
        	'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitMora',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Jugo Hit Lulo',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitLulo',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Jarritos Guayaba',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoGuayaba',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Jarritos Naranja',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoNaranja',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Jarritos Mandarina',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoMandarina',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Jarritos Lima',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoLima',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'America Tropical',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'AmericaTropical',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Yerba Mate Pajarito',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Pajarito',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Yerba Mate Campesino Clasica',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Yerba Mate Campesino Natural',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoNatural',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Yerba Mate Campesino Anis',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoAnis',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Kurupi Fitness',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiFitness',
        ]);
        $product->save();                
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Kurupi Clasica',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Pony Malta',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'PonyMalta',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cafe Sello Rojo',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeSelloRojo',
        ]);
        $product->save();     
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cafe Aguila Roja',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeAguilaRoja',
        ]);
        $product->save();                         
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Harina Pan',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaPanAmarilla',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Harina para Tamal',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaTamal',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Mermelada Paclan Guayaba',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MermeladaPaclan',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Mermelada Intertropico Guayaba',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MermeladaIntertropicoGuayaba',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Chocolate Corona',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Corona',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Panela',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Panela',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Aji Casero El Rey',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'AjiElRey',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Salsa de Tomate Fruco',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'SalsaTomateFruco',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Festival Fresa',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalFresa',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Festival Chocolate',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalChocolate',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Festival Vainilla',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalVainilla',
        ]);
        $product->save();         
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Festival Limon',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalLimon',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Tippy',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Tippy',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Waffer',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Waffer',
        ]);
        $product->save();         
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Galletas Ducales',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Ducales',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Trocitos La Niña',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Trocitos',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Choclitos',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Choclitos',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Obleas',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Obleas',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Bon Bon Bum Fresa',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumFresa',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Bon Bon Bum Surtido',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumSurtido',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Coffe Delight',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CoffeDelight',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Supercoco Bombom',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'SupercocoBombom',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Frunas',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Frunas',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Dulce de Leche Mardel',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'DulceDeLeche',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Nucita',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Nucita',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Chocolatina Jet',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ChocolatinaJet',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Barrilete',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Barrilete',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Aguila',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaAguila',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Poker',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPoker',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cola y Pola',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ColayPola',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Quilmes',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaQuilmes',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Paceña',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPaceña',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Cristal',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaCristal',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Cerveza Cusqueña Rubia',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaCusqueñaRubia',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Uva 2L',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Uva2L',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Manzana 2L',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Manzana2L',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'title' => 'Colombiana 2L',
            'description' => 'Colombiana es la bebida oficial de los colombianos. Tiene un sabor a cola champan.',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Colombiana2L',
        ]);
        $product->save();                                                          
    }
}
