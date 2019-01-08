<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['prodName'=>'Torta de chocolate','prodPrecio'=>'255','prodStock'=>'10','prodDesc'=>'Exquisita torta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '1'],
            ['prodName'=>'Torta de ricota','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisita torta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '2'],
            ['prodName'=>'Tarta de espinaca','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisita tarta casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '3'],
            ['prodName'=>'Budin de pan','prodPrecio'=>'335','prodStock'=>'10','prodDesc'=>'Exquisito budin casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '4'],
            ['prodName'=>'Empanada de atun','prodPrecio'=>'225','prodStock'=>'10','prodDesc'=>'Exquisita empanada casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '5'],
            ['prodName'=>'Ensalada de fruta','prodPrecio'=>'115','prodStock'=>'10','prodDesc'=>'Una fresca ensalada casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '6'],
            ['prodName'=>'Bomba de papa','prodPrecio'=>'345','prodStock'=>'10','prodDesc'=>'Exquisita bomba de papa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '7'],
            ['prodName'=>'Sopa de zapallo','prodPrecio'=>'535','prodStock'=>'10','prodDesc'=>'Exquisita sopa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '8'],
            ['prodName'=>'Albondigas con salsa','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisitas albondigas caseras.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '9'],
            ['prodName'=>'Guiso de lentejas','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisito guiso de lentejas.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '10'],
            ['prodName'=>'Pastel de papa','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisito pastel de papa casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '11'],
            ['prodName'=>'Medialunas con miel','prodPrecio'=>'235','prodStock'=>'10','prodDesc'=>'Exquisitas medialunas con miel casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '12'],
            ['prodName'=>'Tortilla de zapallo','prodPrecio'=>'335','prodStock'=>'10','prodDesc'=>'Exquisita tortilla de papa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '13'],
            ['prodName'=>'Falafel','prodPrecio'=>'135','prodStock'=>'10','prodDesc'=>'Exquisito falafel casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '14'],
            ['prodName'=>'Cheesecake','prodPrecio'=>'735','prodStock'=>'10','prodDesc'=>'Exquisito cheesecake casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '15'],
            ['prodName'=>'Lasagna','prodPrecio'=>'535','prodStock'=>'10','prodDesc'=>'Exquisita lasagna casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '16'],
            ['prodName'=>'Milanesa','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisita milanesa casera.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '17'],
            ['prodName'=>'Lemonpie','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisito lemonpie casero.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '18'],
            ['prodName'=>'Anillos de cebolla','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'Exquisitos anillos de cebolla caseros.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Salado', 'id' => '19'],
            ['prodName'=>'Torta romana','prodPrecio'=>'435','prodStock'=>'10','prodDesc'=>'La mejor torta.','prodImagen'=>'avatars/default.jpg','prodSabor'=>'Dulce', 'id' => '20'],
        ];
        $ingredients = [
            ['name'=>'Lechuga', 'id' => '1'], ['name'=>'Tomate', 'id' => '2'], ['name'=>'Chocolate', 'id' => '3'],
            ['name'=>'Ricota', 'id' => '4'], ['name'=>'Queso', 'id' => '5'], ['name'=>'Crema', 'id' => '6'],
            ['name'=>'Papa', 'id' => '7'], ['name'=>'Atun', 'id' => '8'], ['name'=>'Zapallo', 'id' => '9'],
            ['name'=>'Lentejas', 'id' => '10'], ['name'=>'Espinaca', 'id' => '11'], ['name'=>'Cebolla', 'id' => '12'],
            ['name'=>'Pan', 'id' => '13'], ['name'=>'Limon', 'id' => '14'], ['name'=>'Fruta', 'id' => '15'],
            ['name'=>'Miel', 'id' => '16'],
        ];
        $categories = [
            ['name'=>'Tortas', 'id' => '1'], ['name'=>'Tartas', 'id' => '2'], ['name'=>'Empanadas', 'id' => '3'],
            ['name'=>'Guisos', 'id' => '4'], ['name'=>'Sopas', 'id' => '5'], ['name'=>'Pastas', 'id' => '6'],
            ['name'=>'Carnes', 'id' => '7'], ['name'=>'Verduras', 'id' => '8'], ['name'=>'Ensaladas', 'id' => '9'],
            ['name'=>'Entradas', 'id' => '9'], ['name'=>'Pasteleria', 'id' => '10'],
        ];
        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['prodName'],
                'price'=> $product['prodPrecio'],
                'stock'=> $product['prodStock'],
                'description'=> $product['prodDesc'],
                'flavour'=> $product['prodSabor'],
                'image'=> $product['prodImagen'],
            ]);
        }
        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->insert([
                'name' => $ingredient['name'],
            ]);
        }
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
            ]);
        }
        DB::table('users')->insert([
             'name' => 'Admin',
             'last_name' => 'ADMIN',
             'country' => 'Matrix',
             'province' => 'Hacker',
             'email' => 'admin@admin.admin',
             'password' => Hash::make('asd123'),
             'age' => '18',
             'admin' => '1',
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[0]['id'],
            'ingredient_id' => $ingredients[2]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[0]['id'],
          'category_id' => $categories[0]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[1]['id'],
            'ingredient_id' => $ingredients[3]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[1]['id'],
          'category_id' => $categories[0]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[2]['id'],
            'ingredient_id' => $ingredients[10]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[2]['id'],
          'category_id' => $categories[1]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[3]['id'],
            'ingredient_id' => $ingredients[12]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[3]['id'],
          'category_id' => $categories[0]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[4]['id'],
            'ingredient_id' => $ingredients[7]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[4]['id'],
          'category_id' => $categories[2]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[5]['id'],
            'ingredient_id' => $ingredients[14]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[5]['id'],
          'category_id' => $categories[8]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[6]['id'],
            'ingredient_id' => $ingredients[7]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[6]['id'],
          'category_id' => $categories[9]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[7]['id'],
            'ingredient_id' => $ingredients[8]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[7]['id'],
          'category_id' => $categories[4]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[8]['id'],
            'ingredient_id' => $ingredients[5]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[8]['id'],
          'category_id' => $categories[6]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[9]['id'],
            'ingredient_id' => $ingredients[9]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[9]['id'],
          'category_id' => $categories[3]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[10]['id'],
            'ingredient_id' => $ingredients[6]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[10]['id'],
          'category_id' => $categories[6]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[11]['id'],
            'ingredient_id' => $ingredients[12]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[11]['id'],
          'category_id' => $categories[9]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[12]['id'],
            'ingredient_id' => $ingredients[8]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[12]['id'],
          'category_id' => $categories[1]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[13]['id'],
            'ingredient_id' => $ingredients[10]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[13]['id'],
          'category_id' => $categories[7]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[14]['id'],
            'ingredient_id' => $ingredients[4]['id'],
        ]);
        DB::table('ingredient_product')->insert([
            'product_id' => $products[14]['id'],
            'ingredient_id' => $ingredients[5]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[14]['id'],
          'category_id' => $categories[0]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[15]['id'],
            'ingredient_id' => $ingredients[1]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[15]['id'],
          'category_id' => $categories[5]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[16]['id'],
            'ingredient_id' => $ingredients[12]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[16]['id'],
          'category_id' => $categories[6]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[17]['id'],
            'ingredient_id' => $ingredients[13]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[17]['id'],
          'category_id' => $categories[0]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[18]['id'],
            'ingredient_id' => $ingredients[11]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[18]['id'],
          'category_id' => $categories[8]['id'],
        ]);

        DB::table('ingredient_product')->insert([
            'product_id' => $products[19]['id'],
            'ingredient_id' => $ingredients[0]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[19]['id'],
          'category_id' => $categories[0]['id'],
        ]);
        DB::table('ingredient_product')->insert([
            'product_id' => $products[19]['id'],
            'ingredient_id' => $ingredients[1]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[19]['id'],
          'category_id' => $categories[1]['id'],
        ]);
        DB::table('ingredient_product')->insert([
            'product_id' => $products[19]['id'],
            'ingredient_id' => $ingredients[2]['id'],
        ]);
        DB::table('category_product')->insert([
          'product_id' => $products[19]['id'],
          'category_id' => $categories[2]['id'],
        ]);

      }

}
