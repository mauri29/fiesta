<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post([
			'title' => 'Colombiana 300mL',
        	'weight' => 521,
        	'price' => 2.75,
        	'slug' => 'Colombiana300mL',
            'teaser' => '**La Colombiana 300mL es una bebida de Colombia con sabor a champán.**',
            'body' => '### Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín, Colombia. Su primer producto fue la "Cola-champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro. Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano, del Tour de Francia y del patinaje.  

---

### Sabor: 
La colombiana se caracteriza por tener un sabor cola champán.

---

### Contenido nutricional:
Calorias: 100, Grasas totales: 0g, Sodio: 15mg, Carbohidratos: 31g, Azucares: 31g, Proteinas: 0g. Energia: 174kj/41kcal.

---
',
            'image' => 'http://media.cylex.com.pe/companies/1117/5857/images/pic_COLOMBIANA_535842_large.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
        	'title' => 'Manzana 300mL',
        	'weight' => 521,
            'price' => 1.50,
            'slug' => 'Manzana300mL',
            'teaser' => '**La Manzana Postobón 300mL es una bebida de Colombia tiene un sabor único e incomparable.**',
            'body' => '### Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín, Colombia. Su primer producto fue la "Cola-champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro. Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano, del Tour de Francia y del patinaje.  

---

### Sabor: 
La Manzana Postobón se caracteriza por tener un sabor como su nombre lo indica a cola manzana.

---

### Contenido nutricional:
Calorias: 100, Grasas totales: 0g, Sodio: 15mg, Carbohidratos: 31g, Azucares: 31g, Proteinas: 0g. Energia: 174kj/41kcal.

---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Uva 300mL',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Uva300mL',
            'teaser' => '**La Uva Postobón 300mL es una bebida de Colombia que tiene un sabor especial.**',
            'body' => '### Historia:
En 1904, Gabriel Posada y Valerio Tobón produjeron refrescos en Medellín, Colombia. Su primer producto fue la "Cola-champaña" (hoy Colombiana). Este refresco se hizo famoso en bares, tiendas, clubes sociales y hogares. El producto se distribuyó en una carro tirado por un burro. Posada y Tobón abrieron dos fábricas, una en Manizales y la otra en Cali. La bebida ha sido patrocinio del fútbol colombiano, del Tour de Francia y del patinaje.  

---

### Sabor: 
La Uva Postobón se caracteriza por tener un sabor como su nombre lo indica a cola uva.

---

### Contenido nutricional:
Calorias: 100, Grasas totales: 0g, Sodio: 15mg, Carbohidratos: 31g, Azucares: 31g, Proteinas: 0g. Energia: 174kj/41kcal.

---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Guarana',
            'weight' => 300,
            'price' => 1.50,
            'slug' => 'Guarana',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La Guarana compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Mango',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitMango',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Mora',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitMora',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Jugo Hit Lulo',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JugoHitLulo',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();               
        $post = new \App\Models\Post([
            'title' => 'Jarritos Guayaba',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoGuayaba',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Jarritos Naranja',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoNaranja',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Jarritos Mandarina',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoMandarina',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Jarritos Lima',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoLima',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'America Tropical',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'AmericaTropical',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Pajarito',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Pajarito',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                                                                     
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Clasica',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CampesinoClasica',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();               
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Natural',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CampesinoNatural',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Yerba Mate Campesino Anis',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'JarritoGuayaba',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Kurupi Fitness',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'KurupiFitness',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Kurupi Clasica',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'KurupiClasica',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Pony Malta',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'PonyMalta',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cafe Sello Rojo',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CafeSelloRojo',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cafe Aguila Roja',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CafeAguilaRoja',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Harina Pan',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'HarinaPanAmarilla',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Harina para Tamal',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'HarinaTamal',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Mermelada Paclan Guayaba',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'MermeladaPaclan',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Mermelada Intertropico Guayaba',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'MermeladaIntertropicoGuayaba',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Chocolate Corona',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Corona',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Panela',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Panela',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Aji Casero El Rey',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'AjiElRey',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Salsa de Tomate Fruco',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'SalsaTomateFruco',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Fresa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalFresa',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Chocolate',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalChocolate',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Vainilla',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalVainilla',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Galletas Festival Limon',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'FestivalLimon',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Galletas Tippy',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Tippy',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Galletas Waffer',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Waffer',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();      
        $post = new \App\Models\Post([
            'title' => 'Galletas Ducales',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Ducales',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Trocitos La Niña',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Trocitos',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Choclitos',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Choclitos',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Obleas',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Obleas',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Fresa',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BomBomBumFresa',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Bon Bon Bum Surtido',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'BomBomBumSurtido',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();    
        $post = new \App\Models\Post([
            'title' => 'Coffe Delight',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CoffeDelight',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Supercoco Bombom',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'SupercocoBombom',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Frunas',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Frunas',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Dulce de Leche Mardel',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'DulceDeLeche',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();       
        $post = new \App\Models\Post([
            'title' => 'Nucita',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Nucita',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();   
        $post = new \App\Models\Post([
            'title' => 'Chocolatina Jet',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'ChocolatinaJet',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Barrilete',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Barrilete',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cerveza Aguila',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaAguila',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();
        $post = new \App\Models\Post([
            'title' => 'Cerveza Poker',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaPoker',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();      
        $post = new \App\Models\Post([
            'title' => 'Cola y Pola',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'ColayPola',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();          
        $post = new \App\Models\Post([
            'title' => 'Cerveza Quilmes',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaQuilmes',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Cerveza Paceña',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaPaceña',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Cerveza Cristal',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaCristal',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();  
        $post = new \App\Models\Post([
            'title' => 'Cerveza Cusqueña Rubia',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'CervezaCusqueñaRubia',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Uva 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Uva2L',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save(); 
        $post = new \App\Models\Post([
            'title' => 'Manzana 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Manzana2L',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();     
        $post = new \App\Models\Post([
            'title' => 'Colombiana 2L',
            'weight' => 521,
            'price' => 1.50,
            'slug' => 'Colombiana2L',
            'teaser' => '**La Cerveza Aguila es unica en su sabor. Suele combinarse con Colombiana para hacer Refajo.**',
            'body' => '### Historia:
La Cerveza Aguila es fabricada por la cerveceria Bavaria SA, la mayor cerveceria de Colombia fundada en 1889. En aquella época los consumidores encontraron en la cerveza características especiales de sabor, calidad y presentación a pesar de los largos recorridos que debía soportar sobre remolcadores que la transportaban a través del Magdalena hasta llegar a los mercados de la capital de Colombia. Debido a este tipo y el tiempo de transporte, la cerveza adquirió un precio alto, haciendo de los sitios que la ofrecian sitios populares. En ese tiempo la cerveza compitía con la Chicha y el guarapo. Duránte muchos años intereses internos permiten la creación de innovaciones como logotipo, nombre y diversificación en otros productos como la Pony Malta, la Cola y Pola, entre otros. Actualmente Aguila es la patrocinadora oficial del fútbol colombiano. 

---

### Sabor: 
La cerveza Aguila compite en sabor hoy dia con la cerveza Póker. El sabor de la cerveza Aguila es inigualable. 
---

### Contenido nutricional:


---',
            'image' => 'http://www.ribasmith.com/rimith/images/imgsprod/4900000986-c.jpg',
            'imga' => 'http://alimentaciongastromundo.com/wp-content/uploads/2015/11/gaseosa-colombiana-3125ml.jpg',
            'descra' => 'Colombiana 2L',
            'imgb' => 'http://www.latinfoodsmarket.com/img-colombiana_lata_.jpg',
            'descrb' => 'Colombiana en lata',
            'imgc' => 'http://ep.yimg.com/ca/I/mex-grocer_2268_129665431',
            'descrc' => 'Gaseosa 2L',
            'imgd' => 'https://s-media-cache-ak0.pinimg.com/564x/77/91/96/779196895abeef05ac0d8e25953c8458.jpg',
            'descrd' => 'Refajo',
            'live' => 1,
        ]);
        $post->save();                                                                                                                                                                                            
        
    }
}
