<?php
use App\Tag;
use Illuminate\Database\Seeder;

class TagsSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      $tags = ['Animali', 'Natura', 'Piante'];
      
      foreach ($tags as $tag) {
        $new_category_object = new Tag();
        $new_category_object->name = $tag;
        $new_category_object->save();
      }
    }
}
