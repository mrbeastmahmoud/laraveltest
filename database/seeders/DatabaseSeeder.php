<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Posts::factory(5)->create();

//      $user=   \App\Models\User::factory()->create.blade.php();
//     $personal =   \App\Models\Category::create.blade.php([
//            'name'=>'personal',
//            'slug'=>'personal'
//        ]);
//      $work=  \App\Models\Category::create.blade.php([
//            'name'=>'work',
//            'slug'=>'work'
//        ]);
//        \App\Models\Posts::create.blade.php([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'My familly post',
//            'slug'=>'my-first-post',
//            'excerpt'=>'<p> sit here</p> ',
//            'body'=>'<p>body msg  body msg body msg body msg body msg body msg</p>'
//        ]);
//        \App\Models\Posts::create.blade.php([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'My work post',
//            'slug'=>'my-work2-post',
//            'excerpt'=>'<p> sit here</p> ',
//            'body'=>'<p>body msg  body msg body msg body msg body msg body msg</p>'
//        ]);
//        \App\Models\Posts::create.blade.php([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'My work post',
//            'slug'=>'my-work-post',
//            'excerpt'=>'<p> sit here</p> ',
//            'body'=>'<p>body msg  body msg body msg body msg body msg body msg</p>'
//        ]);
    }
}
