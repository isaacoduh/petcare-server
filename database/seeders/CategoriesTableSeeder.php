<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dogs', 'slug' => 'dogs', 'active' => true, 'parent_id' => null],
            ['name' => 'Cats', 'slug' => 'cats', 'active' => true, 'parent_id' => null],
            ['name' => 'Fish', 'slug' => 'fish', 'active' => true, 'parent_id' => null],
            ['name' => 'Birds', 'slug' => 'birds', 'active' => true, 'parent_id' => null],
            ['name' => 'Small Animals', 'slug' => 'small-animals', 'active' => true, 'parent_id' => null],
            ['name' => 'Dog Food', 'slug' => 'dog-food', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Food', 'slug' => 'cat-food', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Tanks', 'slug' => 'fish-tanks', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Cages', 'slug' => 'bird-cages', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Cages', 'slug' => 'small-animal-cages', 'active' => true, 'parent_id' => 5],
            ['name' => 'Dog Toys', 'slug' => 'dog-toys', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Toys', 'slug' => 'cat-toys', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Food', 'slug' => 'fish-food', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Food', 'slug' => 'bird-food', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Food', 'slug' => 'small-animal-food', 'active' => true, 'parent_id' => 5],
            ['name' => 'Dog Beds', 'slug' => 'dog-beds', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Beds', 'slug' => 'cat-beds', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Filters', 'slug' => 'fish-filters', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Perches', 'slug' => 'bird-perches', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Heating', 'slug' => 'small-animal-heating', 'active' => true, 'parent_id' => 5],
            ['name' => 'Dog Health', 'slug' => 'dog-health', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Health', 'slug' => 'cat-health', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Supplies', 'slug' => 'fish-supplies', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Supplies', 'slug' => 'bird-supplies', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Accessories', 'slug' => 'small-animal-accessories', 'active' => true, 'parent_id' => 5],
            ['name' => 'Dog Grooming', 'slug' => 'dog-grooming', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Grooming', 'slug' => 'cat-grooming', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Lighting', 'slug' => 'fish-lighting', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Training', 'slug' => 'bird-training', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Health', 'slug' => 'small-animal-health', 'active' => true, 'parent_id' => 5],
            ['name' => 'Dog Training', 'slug' => 'dog-training', 'active' => true, 'parent_id' => 1],
            ['name' => 'Cat Training', 'slug' => 'cat-training', 'active' => true, 'parent_id' => 2],
            ['name' => 'Fish Breeding', 'slug' => 'fish-breeding', 'active' => true, 'parent_id' => 3],
            ['name' => 'Bird Health', 'slug' => 'bird-health', 'active' => true, 'parent_id' => 4],
            ['name' => 'Small Animal Breeding', 'slug' => 'small-animal-breeding', 'active' => true, 'parent_id' => 5],
        
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'active' => $category['active'],
                'parent_id' => $category['parent_id'],
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_at' => null,
                'deleted_by' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
