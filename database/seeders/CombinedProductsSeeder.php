<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CombinedProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $user_id = 1;

        // define a list of products
        $products = [
            [
                'title' => 'Dog Leash',
                'slug' => 'dog-leash',
                'description' => 'A sturdy and durable leash for dogs',
                'price' => 12.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Food - Salmon Flavor',
                'slug' => 'cat-food-salmon-flavor',
                'description' => 'Nutritious and tasty salmon-flavored cat food.',
                'price' => 19.99,
                'quantity' => 30,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Cage',
                'slug' => 'bird-cage',
                'description' => 'Spacious and safe bird cage.',
                'price' => 59.99,
                'quantity' => 15,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Tank Filter',
                'slug' => 'fish-tank-filter',
                'description' => 'Efficient and quiet fish tank filter.',
                'price' => 25.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Wheel',
                'slug' => 'hamster-wheel',
                'description' => 'Quiet and durable hamster wheel.',
                'price' => 10.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Bed',
                'slug' => 'dog-bed',
                'description' => 'Comfortable and cozy dog bed.',
                'price' => 35.99,
                'quantity' => 25,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Scratching Post',
                'slug' => 'cat-scratching-post',
                'description' => 'Durable scratching post for cats.',
                'price' => 22.99,
                'quantity' => 30,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Seed - Parrot Mix',
                'slug' => 'bird-seed-parrot-mix',
                'description' => 'Nutrient-rich parrot seed mix.',
                'price' => 15.99,
                'quantity' => 35,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Food - Tropical Flakes',
                'slug' => 'fish-food-tropical-flakes',
                'description' => 'Nutritious tropical flakes for fish.',
                'price' => 8.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Cage',
                'slug' => 'hamster-cage',
                'description' => 'Spacious and secure hamster cage.',
                'price' => 45.99,
                'quantity' => 10,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Collar',
                'slug' => 'dog-collar',
                'description' => 'Adjustable and durable dog collar.',
                'price' => 9.99,
                'quantity' => 60,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Litter Box',
                'slug' => 'cat-litter-box',
                'description' => 'Easy to clean cat litter box.',
                'price' => 20.99,
                'quantity' => 25,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Bath',
                'slug' => 'bird-bath',
                'description' => 'Decorative and functional bird bath.',
                'price' => 30.99,
                'quantity' => 12,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Aquarium Heater',
                'slug' => 'aquarium-heater',
                'description' => 'Reliable and efficient aquarium heater.',
                'price' => 18.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Bedding',
                'slug' => 'hamster-bedding',
                'description' => 'Soft and absorbent hamster bedding.',
                'price' => 12.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Chew Toy',
                'slug' => 'dog-chew-toy',
                'description' => 'Durable and fun chew toy for dogs.',
                'price' => 7.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Catnip Toys',
                'slug' => 'catnip-toys',
                'description' => 'Fun and engaging catnip toys.',
                'price' => 14.99,
                'quantity' => 30,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Perch',
                'slug' => 'bird-perch',
                'description' => 'Comfortable perch for birds.',
                'price' => 11.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Tank Decorations',
                'slug' => 'fish-tank-decorations',
                'description' => 'Colorful decorations for fish tanks.',
                'price' => 16.99,
                'quantity' => 35,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Food',
                'slug' => 'hamster-food',
                'description' => 'Nutritious food for hamsters.',
                'price' => 9.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Shampoo',
                'slug' => 'dog-shampoo',
                'description' => 'Gentle and effective dog shampoo.',
                'price' => 13.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Bed',
                'slug' => 'cat-bed',
                'description' => 'Comfortable and cozy bed for cats.',
                'price' => 29.99,
                'quantity' => 25,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Feeder',
                'slug' => 'bird-feeder',
                'description' => 'Attractive and durable bird feeder.',
                'price' => 24.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Net',
                'slug' => 'fish-net',
                'description' => 'Easy-to-use fish net.',
                'price' => 5.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Tunnel',
                'slug' => 'hamster-tunnel',
                'description' => 'Fun and interactive hamster tunnel.',
                'price' => 14.99,
                'quantity' => 30,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Training Pads',
                'slug' => 'dog-training-pads',
                'description' => 'Absorbent and effective training pads for dogs.',
                'price' => 19.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Collar',
                'slug' => 'cat-collar',
                'description' => 'Adjustable and stylish cat collar.',
                'price' => 8.99,
                'quantity' => 60,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Toy',
                'slug' => 'bird-toy',
                'description' => 'Engaging and colorful toy for birds.',
                'price' => 12.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Tank Light',
                'slug' => 'fish-tank-light',
                'description' => 'Bright and energy-efficient fish tank light.',
                'price' => 22.99,
                'quantity' => 15,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Water Bottle',
                'slug' => 'hamster-water-bottle',
                'description' => 'Leak-proof and easy-to-use water bottle for hamsters.',
                'price' => 9.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Bowl',
                'slug' => 'dog-bowl',
                'description' => 'Stainless steel bowl for dogs.',
                'price' => 10.99,
                'quantity' => 50,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Grooming Brush',
                'slug' => 'cat-grooming-brush',
                'description' => 'Soft and effective grooming brush for cats.',
                'price' => 11.99,
                'quantity' => 35,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Swing',
                'slug' => 'bird-swing',
                'description' => 'Fun and comfortable swing for birds.',
                'price' => 14.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Tank Thermometer',
                'slug' => 'fish-tank-thermometer',
                'description' => 'Accurate and easy-to-read fish tank thermometer.',
                'price' => 8.99,
                'quantity' => 40,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Hamster Hideout',
                'slug' => 'hamster-hideout',
                'description' => 'Cozy and secure hideout for hamsters.',
                'price' => 12.99,
                'quantity' => 30,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Dog Harness',
                'slug' => 'dog-harness',
                'description' => 'Comfortable and adjustable harness for dogs.',
                'price' => 15.99,
                'quantity' => 25,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Cat Tree',
                'slug' => 'cat-tree',
                'description' => 'Multi-level tree for cats to play and rest.',
                'price' => 79.99,
                'quantity' => 10,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Bird Ladder',
                'slug' => 'bird-ladder',
                'description' => 'Fun and engaging ladder for birds.',
                'price' => 9.99,
                'quantity' => 20,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ],
            [
                'title' => 'Fish Tank Stand',
                'slug' => 'fish-tank-stand',
                'description' => 'Sturdy and stylish stand for fish tanks.',
                'price' => 49.99,
                'quantity' => 5,
                'published' => true,
                'created_by' => $user_id,
                'updated_by' => $user_id
            ]
        ];

        $productImages = [
            ['slug' => 'dog-leash', 'url' => 'https://pyxis.nymag.com/v1/imgs/65b/6b5/e903d8f5dd12d9be52b924d2a81688fa89.rsquare.w600.jpg'],
            ['slug' => 'cat-food-salmon-flavor', 'url' => 'https://digitalcontent.api.tesco.com/v2/media/ghs/dcf8e050-27cf-4ea5-9550-9f3dbe2deaa2/572556b4-7255-427d-924d-e69c70ae9194_773552951.jpeg?h=960&w=960'],
            ['slug' => 'bird-cage', 'url' => 'https://assets.wfcdn.com/im/57679659/compr-r85/2471/247198253/63cm-pointed-top-table-top-bird-cage-with-perch.jpg'],
            ['slug' => 'fish-tank-filter', 'url' => 'https://s7cdn.spectrumbrands.com/~/media/Pet/Tetra/Images/Learning%20Centers/Fish%20Learning%20Center/Power%20Filters.jpg'],
            ['slug' => 'hamster-wheel', 'url' => 'https://m.media-amazon.com/images/I/61XBO0gzIkL._AC_UF1000,1000_QL80_.jpg'],
            ['slug' => 'dog-bed', 'url' => 'https://ralphand.co/cdn/shop/products/Balmoral-front-2.jpg?v=1691521053'],
            ['slug' => 'cat-scratching-post', 'url' => 'https://www.therange.co.uk/media/4/5/1612330868_12_4994.jpg'],
            ['slug' => 'bird-seed-parrot-mix', 'url' => 'https://www.littlepeckers.co.uk/cdn/shop/products/C-4008239689764.jpg?v=1682351229'],
            ['slug' => 'fish-food-tropical-flakes', 'url' => 'https://m.media-amazon.com/images/I/51XWKoPt9kL._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'hamster-cage', 'url' => 'https://m.media-amazon.com/images/I/81w4o-fbWxL._AC_UF1000,1000_QL80_.jpg'],
            ['slug' => 'dog-collar', 'url' => 'https://www.lordsandlabradors.co.uk/cdn/shop/products/lords-and-labradors-palermo-collar-sandstone-high-studio.jpg?v=1707478602&width=1445'],
            ['slug' => 'cat-litter-box', 'url' => 'https://m.media-amazon.com/images/I/715PRZWsfWL._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'bird-bath', 'url' => 'https://shop.diabetes.org.uk/cdn/shop/products/ceramic-blue-bird-bath.jpg?v=1660812588'],
            ['slug' => 'aquarium-heater', 'url' => 'https://realaquatics.co.uk/cdn/shop/products/qx0qi2q2cet.jpg?v=1703152080'],
            ['slug' => 'hamster-bedding', 'url' => 'https://smallpetselect.co.uk/cdn/shop/products/Aspen_Bedding_41L_Angle_1copy_1_1_3000x.jpg?v=1676020243'],
            ['slug' => 'dog-chew-toy', 'url' => 'https://shop.rspca.org.uk/cdn/shop/products/3520000380200-PT0116_1-508782.jpg?v=1710526146&width=416'],
            ['slug' => 'catnip-toys', 'url' => 'https://i.insider.com/5b353db544e9882f008b46d3?width=1400&format=jpeg&auto=webp'],
            ['slug' => 'bird-perch', 'url' => 'https://birdcages4less.com/Merchant5/graphics/00000001/T2007BIRDS%20(390x600)%20(325x500).jpg'],
            ['slug' => 'fish-tank-decorations', 'url' => 'https://m.media-amazon.com/images/I/81w1e5hys9L._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'hamster-food', 'url' => 'https://cdn.petsathome.com/public/images/products/900_37289_01.jpg'],
            ['slug' => 'dog-shampoo', 'url' => 'https://buddycare.co.uk/cdn/shop/files/OATMEAL.jpg?v=1692367372'],
            ['slug' => 'cat-bed', 'url' => 'https://i.bosity.com/product_img/272/64046560/64046560_4_image.jpg?x-oss-process=image/resize,p_100/watermark,image_d2F0ZXJtYXJrX2ltZy8xNzExMTQ0Mi9kZWZhdWx0LnBuZz94LW9zcy1wcm9jZXNzPWltYWdlL3Jlc2l6ZSxQXzk5,g_nw,x_0,y_0'],
            ['slug' => 'bird-feeder', 'url' => 'https://m.media-amazon.com/images/I/61+pr0cQ+QL._AC_UF1000,1000_QL80_.jpg'],
            ['slug' => 'fish-net', 'url' => 'https://willyworms.co.uk/cdn/shop/products/nufish-hair-net-fishing-landing-fishmas-nets-match-coarse-willy-worms-638.jpg?v=1660142776'],
            ['slug' => 'hamster-tunnel', 'url' => 'https://www.niteangelpet.com/cdn/shop/products/619BWfyaQ4L._AC_SL1500_1490x1231.jpg?v=1641901764'],
            ['slug' => 'dog-training-pads', 'url' => 'https://www.bmstores.co.uk/images/hpcProductImage/imgSource/330687-puppy-training-pads-100pk.jpg'],
            ['slug' => 'cat-collar', 'url' => 'https://m.media-amazon.com/images/I/71RJCCTQ8LL._AC_UF1000,1000_QL80_.jpg'],
            ['slug' => 'bird-toy', 'url' => 'https://i.ebayimg.com/images/g/WvkAAOSwUblfUPao/s-l1600.jpg'],
            ['slug' => 'fish-tank-light', 'url' => 'https://m.media-amazon.com/images/I/81X8xLHRANL._AC_SL1500_.jpg'],
            ['slug' => 'hamster-water-bottle', 'url' => 'https://example.com/images/hamster-water-bottle.jpg'],
            ['slug' => 'dog-bowl', 'url' => 'https://directbulbs.co.uk/wp-content/uploads/2020/07/dog-bowl-cut-out-01-scaled.jpg'],
            ['slug' => 'cat-grooming-brush', 'url' => 'https://m.media-amazon.com/images/I/615ACuuKNDL._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'bird-swing', 'url' => 'https://m.media-amazon.com/images/I/71xTZw0GNML._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'fish-tank-thermometer', 'url' => 'https://m.media-amazon.com/images/I/61i18Q04vML._AC_SL1500_.jpg'],
            ['slug' => 'hamster-hideout', 'url' => 'https://m.media-amazon.com/images/I/41BVV7HwqbL._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'dog-harness', 'url' => 'https://cdn11.bigcommerce.com/s-39evn3p/images/stencil/800x800/products/1223/14843/Front-Range-Harness-Coastal-Mountains_Right__84646.1710172344.jpg?c=2'],
            ['slug' => 'cat-tree', 'url' => 'https://i.etsystatic.com/30791142/r/il/77e9d8/3399124622/il_fullxfull.3399124622_huy8.jpg'],
            ['slug' => 'bird-ladder', 'url' => 'https://m.media-amazon.com/images/I/61kuMue0tbL._AC_UF894,1000_QL80_.jpg'],
            ['slug' => 'fish-tank-stand', 'url' => 'https://shirley-aquatics.storage.googleapis.com/wp-content/uploads/2021/03/16162925/Ciano-aqua-80-stand.jpg']
        ];


        foreach($products as $product) {
            $productId = DB::table('products')->insertGetId(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
                'deleted_by' => null,
            ]));

            // for ($i = 0; $i < 3; $i++) {
            //     DB::table('product_images')->insert([
            //         'product_id' => $productId,
            //         'path' => 'images/products/' . $product['slug'] . '-' . $i . '.jpg',
            //         'url' => 'https://example.com/images/products/' . $product['slug'] . '-' . $i . '.jpg',
            //         'mime' => 'image/jpeg',
            //         'size' => rand(100, 2000), // Random size between 100 and 2000 KB
            //         'position' => $i,
            //         'created_at' => now(),
            //         'updated_at' => now(),
            //     ]);
            // }
            $this->addProductImages($productId, $product['slug'], $productImages);

            $categoryIds = $categories->random(rand(1, 3))->pluck('id');
            foreach($categoryIds as $categoryId) {
                DB::table('product_categories')->insert([
                    'product_id' => $productId,
                    'category_id' => $categoryId,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }

    private function addProductImages($productId, $slug, $productImages)
    {
        foreach($productImages as $image) {
            if($image['slug'] === $slug){
                DB::table('product_images')->insert([
                    'product_id' => $productId,
                    'path' => 'images/products/' . $slug . '-' . Str::random(10) . '.jpg',
                    'url' => $image['url'],
                    'mime' => 'image/jpeg',
                    'size' => rand(100, 2000), // Random size between 100 and 2000 KB
                    'position' => 0, // You can adjust the position logic if needed
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        
        }
    }
}
