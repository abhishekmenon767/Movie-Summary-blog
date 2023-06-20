<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::factory(5)->create();
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
//         $user = User::factory()->create();


//         $personal = Category::create([
//             'name'=>'Personal',
//             'slug'=>'personal'
//         ]);
//
//        $family = Category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//
//        $work = Category::create([
//            'name'=>'work',
//            'slug'=>'work'
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'title'=> 'My Family Post',
//            'slug' => 'My-Family-Post',
//            'excerpt'=>'Lorem ipsum dorla skdnf',
//            'body'=>'shjbdhf iusdfibsid isudhfiu sidufh9wherb saidhf shiosijdofij sodihfoi sdiofh sidhfoishdiofhosihdfoihsd sodihfohsd foishdf.sidhfiu iushdiufhisuhdfiusduifb'
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=> 'My work Post',
//            'slug' => 'My-work-Post',
//            'excerpt'=>'Lorem ipsum dorla skdnf',
//            'body'=>'shjbdhf iusdfibsid isudhfiu sidufh9wherb saidhf shiosijdofij sodihfoi sdiofh sidhfoishdiofhosihdfoihsd sodihfohsd foishdf.sidhfiu iushdiufhisuhdfiusduifb'
//        ]);
    }
}
