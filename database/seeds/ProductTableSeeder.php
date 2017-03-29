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
        	'imagePath' => 'https://ucarecdn.com/3cc47a42-8740-4489-9f80-3e1c83d79df2/Colombiana300mL.png',
        	'title' => 'Colombiana 300mL',
        	'description' => '&#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.  
            &#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán. ',
            'weight' => 250,
        	'price' => 1.75,
            'offer' => 8,
            'slug' => 'Colombiana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'https://ucarecdn.com/2c264b44-0ded-4a77-bd25-254c475c7807/Manzana300mL.png',
        	'title' => 'Manzana Postobón 300mL',
        	'description' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Apfel Geschmack.  
            &#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana.     
             ',
        	'price' => 1.50,
            'weight' => 250,
            'offer' => 15,
            'slug' => 'Manzana300mL',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'https://ucarecdn.com/b85dfe94-7e86-4c77-bf76-1e40304e5b11/Uva300mL.png',
        	'title' => 'Uva Postobón 300mL',
        	'description' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.  
            &#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.     
            ',
            'weight' => 250,
        	'price' => 12,
            'offer' => 9,
            'slug' => 'Uva300mL',
        ]);
        $product->save();
                $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/cf277ee6-f0cb-4f0e-8dca-a67c6fc8df19/SelloRojo.png',
            'title' => 'Cafe Sello Rojo',
            'description' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.  
            &#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeSelloRojo',
        ]);
        $product->save();     
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/8436ad9c-def0-4a78-bbe0-23c322a3df27/AguilaRoja.png',
            'title' => 'Cafe Aguila Roja',
            'description' => '&#x1F4D9;&nbsp; Dein Tag beginnt mit einem guten kolumbianischen Kaffee.  
            &#x1F4D5;&nbsp; Tu día empieza después de un buen café colombiano.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CafeAguilaRoja',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/ea6bb7bc-7a4e-40b9-89a2-5d44c3ef67bf/Guarana.png',
            'title' => 'Guarana Antártica',
            'description' => '&#x1F4D9;&nbsp; Guarana Antártica ist ein koffeinhaltiges Erfrischungsgetränk aus Brasilien.  
            &#x1F4D5;&nbsp; Guarana Antártica es una bebida refrescante de Brasil, rica en cafeína.     
             ',
            'price' => 35,
            'weight' => 250,
            'offer' => 25,
            'slug' => 'Guarana',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/5b0a08eb-29c6-4373-bc7c-8f746baa136c/HitLulo.png',
            'title' => 'Jugo Hit Lulo',
            'description' => '&#x1F4D9;&nbsp; Jugo Hit Lulo ist ein kolumbianischer Fruchtsaft mit Lulogeschmack.  
            &#x1F4D5;&nbsp; Jugo Hit Lulo es una bebida colombiana a base de extracto de lulo.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitLulo',
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'https://ucarecdn.com/3275259d-60b7-4053-87db-e02a18cdc32c/HitMango.png',
        	'title' => 'Jugo Hit Mango',
        	'description' => '&#x1F4D9;&nbsp; Jugo Hit Mango ist ein kolumbianischer Fruchtsaft mit Mangogeschmack.  
            &#x1F4D5;&nbsp; Jugo Hit Mango es una bebida colombiana a base de extracto de Mango.     
            ',
        	'price' => 6.99,
            'weight' => 125,
            'offer' => 27,
            'slug' => 'JugoHitMango'
        ]);
        $product->save();
        $product = new \App\Models\Product([
        	'imagePath' => 'https://ucarecdn.com/74b079d5-5258-46f2-80aa-a67deedbcd75/HitMora.png',
        	'title' => 'Jugo Hit Mora',
        	'description' => '&#x1F4D9;&nbsp; Jugo Hit Mora ist ein kolumbianischer Fruchtsaft mit Himbeergeschmack.  
            &#x1F4D5;&nbsp; Jugo Hit Mora es una bebida colombiana a base de extracto de frambuesa.     
            ',
        	'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JugoHitMora',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/def77ce8-0b05-404d-a48e-83e53f2918ba/Guayaba.png',
            'title' => 'Jarritos Guayaba',
            'description' => '&#x1F4D9;&nbsp; Jarrito Guave ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Guavegeschmack.  
            &#x1F4D5;&nbsp; Jarrito Guave es una bebida refrescante sin alcohol con sabor único a guayaba.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoGuayaba',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b93f39a1-95d0-4d55-afe6-136bdc529ba2/Grapefruit.png',
            'title' => 'Jarritos Grapefruit',
            'description' => '&#x1F4D9;&nbsp; Jarrito Grapefruit ist ein alkoholfreies Erfrischungsgetränk mit einzigartigem Grapefruitgeschmack.  
            &#x1F4D5;&nbsp; Jarrito Grapefruit es una bebida refrescante sin alcohol con sabor único a toronja.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoNaranja',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/8ded2fc5-ac4a-4b63-a394-59bdef84addc/Mandarina.png',
            'title' => 'Jarritos Mandarina',
            'description' => '&#x1F4D9;&nbsp; Jarrito Mandarin ist ein alkoholfreies Erfrischungsgetränk.  
            &#x1F4D5;&nbsp; Jarrito Mandarin es una bebida refrescante sin alcohol con sabor único a mandarina.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoMandarina',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/2e299c79-c2ec-4313-8e24-fc19f7fa9689/Lima.png',
            'title' => 'Jarritos Lima',
            'description' => '&#x1F4D9;&nbsp; Jarrito Lima ist ein alkoholfreies Erfrischungsgetränk.
            &#x1F4D5;&nbsp; Jarrito Lima es una bebida refrescante sin alcohol con sabor único a limón.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'JarritoLima',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/1a4d141a-6f65-4bd6-b419-33e54b8f8885/Pajarito.png',
            'title' => 'Yerba Mate Pajarito',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht.  
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Pajarito',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/9d58c6b5-5361-4bb7-93b5-e8bc72df776e/CampesinoClasico.png',
            'title' => 'Yerba Mate Campesino Clasica',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht.  
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/028babf1-5d82-423f-813a-598be668c490/CampesinoTradicional.png',
            'title' => 'Yerba Mate Campesino Tradicional',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht. Diese Kräuter verbessern den Leber- und Nierenfunktionszustände. 
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Actúa excelentemente para mejorar los estados funcionales de los riñones y del hígado.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoTradicional',
        ]);
        $product->save();           
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b9b61707-8a8e-4075-8fa9-5f2fdf6470d6/CampesinoAnis.png',
            'title' => 'Yerba Mate Campesino Anis',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht. Diese Kräuter helfen gegen Verdauungsstörungen.
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Estas hierbas ayudan contra malestares digestivos.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CampesinoAnis',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f58b9140-cd7a-402c-a025-caf1d21874d8/Fitness.png',
            'title' => 'Kurupi Fitness',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht. Diese Yerba Mate ist besonders für Sport und Diäten, reduziert den Appetit und verbessert die Darmtätigkeit.
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas, reduce el apetito y mejora el tránsito intestinal.   
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiFitness',
        ]);
        $product->save();                
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/00d35107-2604-47d3-82d1-4f9c1eb53aa7/KurupiMenta.png',
            'title' => 'Kurupi Menta y Boldo',
            'description' => '&#x1F4D9;&nbsp; Mate ist eine Art Kräutertee, der mit Zucker, Honig oder ein anderes Süssstoff einen unvergleichbaren Geschmack erreicht. Diese Yerba Mate ist besonders für Sport und Diäten. Geeignet gegen Verdauungsstörungen wie Gastritis.
            &#x1F4D5;&nbsp; Mate es una infusión de hojas de yerba mate que al endulzar con azúcar, miel u otro endulzante obtiene un sabor inigualable. Esta Yerba Mate es especializada para deporte y dietas. Posee propiedades digestivas, pues ofrecen una acción antiácida.   
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'KurupiClasica',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/191599a5-fc4d-4b61-b453-026755214214/PonyMalta.png',
            'title' => 'Pony Malta',
            'description' => '&#x1F4D9;&nbsp; Pony Malta ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus dem Malzextrakt.  
            &#x1F4D5;&nbsp; Pony Malta es una bebida gaseosa refrescante no alcohólica a base de malta.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'PonyMalta',
        ]);
        $product->save();                             
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/4fd71604-e1f9-4e22-a992-e30e2d225ddf/PAN.png',
            'title' => 'Harina Pan',
            'description' => '&#x1F4D9;&nbsp; Glutenfreues Produkt aus reiner Maisstärke. Es hat keine Konservierungsmitteln noch Farbstoffe. Durch Zugabe von Wasser entsteht eine Masse dank der Wandlungsfähigkeit.  
            &#x1F4D5;&nbsp; Producto único de maíz puro libre de glutén. No tiene conservantes ni colorantes. Se produce una masa al instante con sólo agregar agua, gracias a su versatilidad.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaPanAmarilla',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/e6f7e2f1-2500-427e-bcb6-a970e1f17e32/Tamal.png',
            'title' => 'Harina para Tamal',
            'description' => '&#x1F4D9;&nbsp; Tamal ist ein mesoamerikanisches Gericht bestehend aus einem Maisteig und gefüllt mit Fleisch, Käse und/oder andere Zutaten. Es wird in Pflanzenblätter eingehüllt gedämpft. Tamal wurde von den Mayas und Azteken zubereitet.  
            &#x1F4D5;&nbsp; Tamal es un plato mesoamericano que consiste de una masa de maíz con carne, queso y/o otros ingredientes y envuelto en hojas de plantas de maíz, donde se cocinado y preparado para su consumo. Tamal fue preparado por los Mayas y los Aztecas.      
             ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'HarinaTamal',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/043570c3-e4ea-40f2-991d-30fcfa4e4911/MermeladaGuayaba.png',
            'title' => 'Mermelada Guayaba',
            'description' => '&#x1F4D9;&nbsp; Probiere die Marmelade mit einzigartigem Guavegeschmack. Die Zusammensetzung liegt zwischen Gelee und Konfitüre.
            &#x1F4D5;&nbsp; Prueba la mermelada con sabor único a guayaba. Su composición se sutúa entre jalea y confitura.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MermeladaPaclan',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/a02790db-2a24-475f-a242-49e98d2be46f/Corona.png',
            'title' => 'Chocolate Corona',
            'description' => '&#x1F4D9;&nbsp; Die Schokolade Corona hat einen leckeren Aroma und Geschmack, sie ist schaumig, Null Cholesterin und hat Antioxidantien.  
            &#x1F4D5;&nbsp; El chocolate corona tiene un delicioso aroma y sabor, es espumoso, cero colesterol y fuente de antioxidantes.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ChocolateCorona',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d82ca0a6-8930-4112-a650-aa959944eb69/Panela.png',
            'title' => 'Panela',
            'description' => '&#x1F4D9;&nbsp; Zucker beinhaltet hauptsächlich Sacharose. Panela hat Sacharose, Glukose, Fruktose, Mineralien und Vitaminen wie Askorbinsäure und Vitamine der Gruppe B.  
            &#x1F4D5;&nbsp; La panela se considera un alimento que, a diferencia del azúcar, que es básicamente sacarosa, presenta además, significativos contenidos de glucosa, fructosa, proteinas, minerales y vitaminas como el ácido ascórbico y complejo B.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Panela',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/139a3321-fe73-4c28-9a89-c716984f5725/ElRey.png',
            'title' => 'Aji Casero El Rey',
            'description' => '&#x1F4D9;&nbsp; Chili beinhaltet Capsaicin, ein Stoff, der einen reizenden charakteristischen Geschmack den Gerichten gibt. El Rey wird normalerweise mit Empanadas, mit gekochten Kartoffeln oder mit einer anderen Art von Salzkosten verzehrt.  
            &#x1F4D5;&nbsp; El ají contiene capsaicina, sustancia irritante picante o acre que le da su sabor característico. El Rey se suele acompañar con empanadas, papas cocidas o cualquier otro tipo de bocado de sal.       
             ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'AjiElRey',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/1f1d7de1-1631-4be8-8af3-a33202c8208f/SalsaTomate.png',
            'title' => 'Salsa de Tomate Fruco',
            'description' => '&#x1F4D9;&nbsp; Die Tomatensauce wird aus 100% Tomaten hergestellt. Es hat einen milden Geschmack. 
            &#x1F4D5;&nbsp; La salsa de tomate es hecha con tomates 100% naturales. Tiene un sabor muy suave.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'SalsaTomateFruco',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/48db1fd1-4bc1-4990-ba82-ebdf81bad57a/FestivalDiferentes.png',
            'title' => 'Galletas Festival',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Schokoladen-, Vanille-, Erdbeer- und Zitronencremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Chocolate, Vainilla, Fresa y Limón.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalSurtido',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/4fce50c4-a75f-48c1-b8b9-ac24b8fd1bd6/FestivalFresa.png',
            'title' => 'Galletas Festival Fresa',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Erdbeercremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Fresa.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalFresa',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/cc39e2bd-6cbd-4d80-ba5a-725ab9c05d7e/FestivalChocolate.png',
            'title' => 'Galletas Festival Chocolate',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Schokoladencremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Schokolade.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalChocolate',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/10060bd2-407d-4a9c-940f-658bae203664/Vainilla.png',
            'title' => 'Galletas Festival Vainilla',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Vanillecremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalVainilla',
        ]);
        $product->save();         
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/5f1d74e9-a7a0-4752-8d2a-a80831c294ca/Limon.png',
            'title' => 'Galletas Festival Limon',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Zitronencremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Limón.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'FestivalLimon',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/e1029fd5-189f-472a-8961-7381664d8e71/GoyaMango.png',
            'title' => 'Mango Wafer',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Mangocremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Mango.       
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'MangoWaffer',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/28451464-a912-4ba0-9ed6-1aa76a5be953/GoyaGuayaba.png',
            'title' => 'Guayaba Wafer',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Guavecremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Guayaba.       
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'GuayabaWaffer',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/de3ce559-508a-449f-8c2e-9365bc0aec8d/GoyaVainilla.png',
            'title' => 'Vanilla Wafer',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Vanillacremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Vainilla.       
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'VanillaWaffer',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/9720c0a4-862c-469d-aadf-4db58d8def10/GoyaCoco.png',
            'title' => 'Coco Wafer',
            'description' => '&#x1F4D9;&nbsp; Keksen mit Kokosnusscremefüllung.  
            &#x1F4D5;&nbsp; Galletas rellenas con crema sabor a Coco.       
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CocoWaffer',
        ]);
        $product->save();                
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/1082ce0d-ab8c-445f-bad9-b53f85ea9554/Ducales.png',
            'title' => 'Galletas Ducales',
            'description' => '&#x1F4D9;&nbsp; Keksen mit einem magischen unbeschreibbaren Geschmack.  
            &#x1F4D5;&nbsp; Galletas con un sabor mágico indescriptible.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Ducales',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f49d58c9-2a5d-4389-b42c-8dbcf6530d30/Trocitos.png',
            'title' => 'Trocitos Suavecitos',
            'description' => '&#x1F4D9;&nbsp; Trocitos sind aus Mais hergestellt, nährstoffreichend und lecker. Glutenfrei.  
            &#x1F4D5;&nbsp; Los trocitos son hechos de maíz, son nutritivos y deliciosos. Sin Gluten.        
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Trocitos',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/dab4b22f-2c26-4065-b8db-1565a0e3254a/Choclitos.png',
            'title' => 'Choclitos',
            'description' => '&#x1F4D9;&nbsp; Choclitos sind knusprig, aus Mais hergestellt und mit Zitronengeschmack.  
            &#x1F4D5;&nbsp; Los choclitos son crocantes, pasabocas de maíz con sabor a limón.      
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Choclitos',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/eb89a040-3295-4ab4-bcea-7050dc1a5f1e/Obleas.png',
            'title' => 'Obleas',
            'description' => '&#x1F4D9;&nbsp; Oblaten werden mit Milchkonfitüre (dulce de leche), manchmal mit Büchsenmilch, Schokoladensplitter, Kokosraspeln, Brombeerenkonfitüre, Käse, Marmelade oder Butter mit Zucker gegessen.  
            &#x1F4D5;&nbsp; La oblea es un postre hecho con dos galletas dentro de las cuales hay dulce de leche o arequipe, a menudo acompañada de leche condensada, chispas de chocolate, coco rallado, dulce de mora, queso, mermelada o mantequilla con azúcar.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Obleas',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d3c9b4cc-c0fa-4ecb-a478-b6f82bfca32b/BomBomBunFresaSingle.png',
            'title' => 'Bon Bon Bum Fresa',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumFresaSingle',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/2afcb18b-3654-4a2e-88b0-8fb879dae51f/BomBomBum.png',
            'title' => 'Bon Bon Bum Fresa',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Erdbeergeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fresa. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumFresa',
        ]);
        $product->save();      
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0a964bc9-9392-40bc-be4c-4ffd71b2ea52/BomBomBunMandarine.png',
            'title' => 'Bon Bon Bum Mandarine',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Mandarinegeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mandarina. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumMandarine',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/24b5d877-79eb-4fc3-bc48-9349cfe1ac4e/BomBomBunFresaIntensaSingle.png',
            'title' => 'Bon Bon Bum Fressa Intensa',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit intensivem Erdbeeregeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Fressa Intensa. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumFressaIntensa',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/e330140f-35fa-49c2-b554-3b3abb374985/BomBomBunWildAppleSingle.png',
            'title' => 'Bon Bon Bum Wild Apple',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfelgeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabor a Mango Biche. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BomBomBumApple',
        ]);
        $product->save();                 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/62ff3b6c-8a45-4aca-a803-f9d3563c6d16/BomBomBunSurtidoSingle.png',
            'title' => 'Bon Bon Bum Surtido',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfel-, Erdbeere-, intensive Erdbeer- und Mandarinegeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Mango Biche, Fresa, Fressa intensa y Mandarina. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumSurtidoSingle',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/7bbaddfe-78fc-433e-8519-676151489f56/Surtido.png',
            'title' => 'Bon Bon Bum Surtido',
            'description' => '&#x1F4D9;&nbsp; Lekere Lollipops aus Kolumbien mit Wildapfel-, Erdbeere-, intensive Erdbeer- und Mandarinegeschmack. Innerlich befindet sich ein Kaugummi.  
            &#x1F4D5;&nbsp; Deliciosa chupeta de Colombia con sabores a Mango Biche, Fresa, Fressa intensa y Mandarina. En su interior tiene goma de mascar.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BonBonBumSurtido',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/8866a50f-3396-4be5-913c-4cc48727df44/Delight.png',
            'title' => 'Coffe Delight',
            'description' => '&#x1F4D9;&nbsp; Coffee Delight ist das Ergebnis des Gemisches von kolumbianischem Kaffee, Milch, Zucker und andere Zutaten. Es ähnelt dem Geschmack nach Karamell, hat eine runde Form. Der Geschmack begeistert, inspiriert und erfreut. Empfohlen für Schüler/Studenten.  
            &#x1F4D5;&nbsp; El coffee delight es el resultado de la mezcla de ingredientes de café colombiano. Tiene sabor a caramelo, tiene forma redonda. Su sabor entusiasma, inspira y deleita. Recomendado para estudiantes.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CoffeDelight',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/5c114c48-e5af-4e0b-892c-9d754a93b8c5/SuperCocoSingle.png',
            'title' => 'Bombón Supercoco',
            'description' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.  
            &#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada. 
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BombonSupercocoSingle',
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/7d88a0da-eba0-472f-9741-2635d8527dc1/SuperCoco.png',
            'title' => 'Bombón Supercoco',
            'description' => '&#x1F4D9;&nbsp; Supercoco ist ein Lollipop mit Kokosnuskaramell. Der Geschmack leitet sich vom Gemisch aus Zucker, Kokosnuss, Glukose, Wasser und Jodsalz ab.  
            &#x1F4D5;&nbsp; Supercoco es una chupeta de caramelo con coco. Su sabor se deriva de la mezcla de azúcar, coco, glucosa, agua y sal yoyada.
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'BombonSupercoco',
        ]);
        $product->save();   
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/b5d00b44-1a35-447c-880f-25a753d6b688/Frunas.png',
            'title' => 'Frunas',
            'description' => '&#x1F4D9;&nbsp; Frunas sind kaubaren weichen Bonbons mit diversen Geschmachsrichtungen (Erdbeere, Zitrone, Orange, Fruits).  
            &#x1F4D5;&nbsp; Frunas son caramelos blandos masticables con diversos sabores (fresa, limón, naranja, Frutas).
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Frunas',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d9337cf2-db5b-437f-9b0d-1a39b1e6ab02/DulcedeLeche.png',
            'title' => 'Dulce de Leche Mardel',
            'description' => '&#x1F4D9;&nbsp; Dulce de Leche ist süss. Es wird gewöhnlich in Dessert wie alfajores, cuchufiles, panqueques, Tortillas, Wafles, Eis, Oblaten, Kuchen und Gebäcke gebraucht.  
            &#x1F4D5;&nbsp; Su sabor característico es el dulce. Suele utilizarse en postres como alfajores, cuchufiles, panqueques, tortillas, wafles, helados, obleas, tortas y pasteles.
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'DulceDeLeche',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/3e74a8bd-2f6e-4b23-8f8d-bd06200863cc/Nucita.png',
            'title' => 'Nucita',
            'description' => '&#x1F4D9;&nbsp; Nucita ist eine Creme mit Milch-, Schokoladen- und Haselnüssgeschmack.  
            &#x1F4D5;&nbsp; Nucita es una crema con sabor a leche, chocolate y nueces.
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Nucita',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/d0e01a6f-086d-4d84-800f-a2c13fd8a4c4/Jet.png',
            'title' => 'Chocolatina Jet',
            'description' => '&#x1F4D9;&nbsp; Die Chocolatina Jet hat einen leckeren Aroma und Geschmack, Null Cholesterin.  
            &#x1F4D5;&nbsp; La Chocolatina Jet tiene un delicioso aroma y sabor, cero colesterol.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ChocolatinaJet',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/53c5473a-5870-4d73-9a26-0826d8d772a1/Barrilete.png',
            'title' => 'Barrilete',
            'description' => '&#x1F4D9;&nbsp; Barrilete ist eine lange Süssigkeit. Der Gemisch der Farben verschmelzen beim Kauen auf der Zunge und erzeugen einen Tuttifritti Geschmack.  
            &#x1F4D5;&nbsp; Barrilete es dulce y alargado. Al mascar, la mezcla de los colores del barrilete se derriten en la lengua dando un sabor a tutifruti. 
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Barrilete',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/76f225bf-c874-4204-9415-34f0c861cd48/Aguila.png',
            'title' => 'Cerveza Aguila',
            'description' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Águila ist einzigartig in Farbe und Aroma.  
            &#x1F4D5;&nbsp; El sabor de la cerveza Águila es única en color y aroma.
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaAguila',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/4cdff22d-834f-40ac-9146-14ee9d8eee53/Poker.png',
            'title' => 'Cerveza Poker',
            'description' => '&#x1F4D9;&nbsp; Der Geschmack des Biers cerveza Poker ist einzigartig in Farbe und Aroma.  
            &#x1F4D5;&nbsp; El sabor de la cerveza Poker es única en color y aroma.
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPoker',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/f9d757e6-eeaa-4e27-892e-725cfebdfba9/ColayPola.png',
            'title' => 'Rebajo Cola y Pola',
            'description' => '&#x1F4D9;&nbsp; Der Geschmack der Refajo Cola y Pola hat denselben wie bei der Mischung aus Bier und Cola Soda, der Geschmack ist unbeschreibbar.  
            &#x1F4D5;&nbsp; El sabor del Refajo Cola y Pola tiene el mismo de la mezcla entre la cerveza y bebida de cola, su sabor es indescriptible. 
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'ColayPola',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/14d55ef8-19fe-4e9a-992d-9bd033bc64ed/Quilmes.png',
            'title' => 'Cerveza Quilmes',
            'description' => '&#x1F4D9;&nbsp; Quilmes ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.  
            &#x1F4D5;&nbsp; Quilmes es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.  
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaQuilmes',
        ]);
        $product->save();    
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0bbc36d8-2bae-487c-9f36-e788f9613118/Pacena.png',
            'title' => 'Cerveza Paceña',
            'description' => '&#x1F4D9;&nbsp; Paceña ist ein schaumiges Bier, mit einem unbeschreibbaren einzigartigen und unvergleichbaren Geschmack.   
            &#x1F4D5;&nbsp; Paceña es una cerveza espumosa, de un sabor indescriptible. Tiene un sabor único e inigualable.  
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaPaceña',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/69dfc502-3d50-4ebd-a948-e8ec8a7940e6/Cusquena.png',
            'title' => 'Cerveza Cusqueña Rubia',
            'description' => '&#x1F4D9;&nbsp; Das Bier cerveza Cusqueña Premium Golden ist ein Pilsener Bier, erzeugt aus reine Braugerste und echter Hopfen.  
            &#x1F4D5;&nbsp; La Cerveza Cusqueña Premium Golden es una cerveza Pilsener, elaborada con cebada malteada pura y lúpulo saaz.  
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'CervezaCusqueñaRubia',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/ac2e1a92-51a7-4997-ab78-2a5e5e04721e/Uva2L.png',
            'title' => 'Uva 2L',
            'description' => '&#x1F4D9;&nbsp; Uva Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Traube Geschmack.  
            &#x1F4D5;&nbsp; Uva Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/uva.    
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Uva2L',
        ]);
        $product->save(); 
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/0c987852-78a0-444d-87da-9335c44f41f1/Manzana2L.png',
            'title' => 'Manzana 2L',
            'description' => '&#x1F4D9;&nbsp; Manzana Postobón ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola-Apfel Geschmack.  
            &#x1F4D5;&nbsp; Manzana Postobón es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/manzana.     
            ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Manzana2L',
        ]);
        $product->save();  
        $product = new \App\Models\Product([
            'imagePath' => 'https://ucarecdn.com/ad6c2766-203f-4a49-8da1-c013ba6e241f/Colombiana2L.png',
            'title' => 'Colombiana 2L',
            'description' => '#x1F4D9;&nbsp; Colombiana ist ein alkoholfreies kohlensäurehaltiges Erfrischungsgetränk aus Kolumbien mit Cola/Champagne Geschmack.  
            &#x1F4D5;&nbsp; Colombiana es una bebida gaseosa refrescante sin alcohol de Colombia con sabor a cola/champán.     
             ',
            'price' => 8.5,
            'weight' => 3125,
            'offer' => 36,
            'slug' => 'Colombiana2L',
        ]);
        $product->save();                                                          
    }
}
