<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = ['Tecnologia', 'Ambiente', 'Terrestre'];
      
        foreach ($categories as $category) {
          $new_category_object = new Category();
          $new_category_object->name = $category;
          $new_category_object->save();
        }
    }
    
}
